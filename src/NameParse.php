<?php

namespace NameParse;

use Exception;

class NameParse {
    private $_key = '';
    private $_url = 'https://api.nameparse.com';
    public function __construct($config)
    {
        $this->applyConfig($config);
    }

    private function applyConfig($config) {
        if(isset($config['key'])) {
            $this->_key = $config['key'];
        }
    }

    /**
     * @param $name
     * @param array $config
     * @return NameParseResult
     * @throws Exception
     */
    public function parse($name,$config=[]) {
        if(count($config) > 0) {
            $this->applyConfig($config);
        }
        $url = $this->_url . '/parse?' . http_build_query(['name' => $name,'details'=>true]);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Accept: application/json',
            'x-api-key: '.$this->_key
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if(500 === $http_code) {
            throw new \Exception("encountered a www.nameparse.com service error");
        }
        else if(403 === $http_code) {
            throw new \Exception("invalid www.nameparse.com API key, please check your account");
        }

        $results = json_decode($response);

        $details = new NameParseResultDetails();
        $details
            ->setGiven($results->details->given)
            ->setSur($results->details->sur)
            ->setMiddle($results->details->middle)
            ->setTitle($results->details->title)
            ->setMiddle($results->details->middle)
            ->setInitials($results->details->initials)
            ->setPrecursor($results->details->precursor);

        $npr = new NameParseResult();
        $npr->setFirst($results->first)->setLast($results->last)->setMiddle($results->middle)->setDetails($details);

        return $npr;
    }
}