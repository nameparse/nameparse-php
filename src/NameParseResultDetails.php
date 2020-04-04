<?php

namespace NameParse;


class NameParseResultDetails
{
    private $_given = '';
    private $_sur = '';
    private $_middle = '';
    private $_title = '';
    private $_initials = '';
    private $_suffix = '';
    private $_precursor = '';

    /**
     * @param $given string given component of the name
     * @return $this this instance
     */
    public function setGiven($given) { $this->_given = $given; return $this; }

    /**
     * @return string given component of the name
     */
    public function getGiven() { return $this->_given; }

    /**
     * @param $sur string sur component of the name
     * @return $this this instance
     */
    public function setSur($sur) { $this->_sur = $sur; return $this; }

    /**
     * @return string sur component of the name
     */
    public function getSur() { return $this->_sur; }

    /**
     * @param $middle string middle component of the name
     * @return $this this instance
     */
    public function setMiddle($middle) { $this->_middle = $middle; return $this; }

    /**
     * @return string middle component of the name
     */
    public function getMiddle() { return $this->_middle; }

    /**
     * @param $title string title component of the name
     * @return $this this instance
     */
    public function setTitle($title) { $this->_title = $title; return $this; }

    /**
     * @return string title component of the name
     */
    public function getTitle() { return $this->_title; }

    /**
     * @param $initials string initials component of the name
     * @return $this this instance
     */
    public function setInitials($initials) { $this->_initials = $initials; return $this; }

    /**
     * @return string initials component of the name
     */
    public function getInitials() { return $this->_initials; }

    /**
     * @param $suffix string suffix component of the name
     * @return $this this instance
     */
    public function setSuffix($suffix) { $this->_suffix = $suffix; return $this; }

    /**
     * @return string suffix component of the name
     */
    public function getSuffix() { return $this->_suffix; }

    /**
     * @param $precursor string precursor component of the name
     * @return $this this instance
     */
    public function setPrecursor($precursor) { $this->_precursor = $precursor; return $this; }

    /**
     * @return string precursor component of the name
     */
    public function getPrecursor() { return $this->_precursor; }
}