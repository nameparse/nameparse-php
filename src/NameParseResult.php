<?php

namespace NameParse;

class NameParseResult
{
    private $_first = '';
    private $_last = '';
    private $_middle = '';
    private $_details = null;

    /**
     * @param $first string first name component of the name
     * @return $this this instance
     */
    public function setFirst($first) { $this->_first = $first; return $this; }

    /**
     * @return string first name component of the name
     */
    public function getFirst() { return $this->_first; }

    /**
     * @param $last string last name component of the name
     * @return $this this instance
     */
    public function setLast($last) { $this->_last = $last; return $this; }

    /**
     * @return string last name component of the name
     */
    public function getLast() { return $this->_last; }

    /**
     * @param $middle string middle name component of the name
     * @return $this this instance
     */
    public function setMiddle($middle) { $this->_middle = $middle; return $this; }

    /**
     * @return string middle name component of the name
     */
    public function getMiddle() { return $this->_middle; }

    /**
     * @param $details NameParseResultDetails the parse details
     * @return $this this instance
     */
    public function setDetails($details) { $this->_details = $details; return $this; }

    /**
     * @return NameParseResultDetails the parse details
     */
    public function getDetails() { return $this->_details; }

}