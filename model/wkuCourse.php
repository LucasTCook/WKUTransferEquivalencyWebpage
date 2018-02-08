<?php

class wkuCourse extends base {
    public $_ID;
    public $_Number;
    public $_Title;
    public $_Hours;
    public $_AndOr;
    public $_GenEd;
    public $_Colonnade;
            
    public function __construct($id = ''){
	if($id != ''){
		$this->setID($id);
		$this->Find($this);
	}
    }  
    
    function get_ID() {
        return $this->_ID;
    }

    function get_Number() {
        return $this->_Number;
    }

    function get_Title() {
        return $this->_Title;
    }

    function get_Hours() {
        return $this->_Hours;
    }

    function get_AndOr() {
        return $this->_AndOr;
    }

    function get_GenEd() {
        return $this->_GenEd;
    }

    function get_Colonnade() {
        return $this->_Colonnade;
    }

    function set_ID($_ID) {
        $this->_ID = $_ID;
    }

    function set_Number($_Number) {
        $this->_Number = $_Number;
    }

    function set_Title($_Title) {
        $this->_Title = $_Title;
    }

    function set_Hours($_Hours) {
        $this->_Hours = $_Hours;
    }

    function set_AndOr($_AndOr) {
        $this->_AndOr = $_AndOr;
    }

    function set_GenEd($_GenEd) {
        $this->_GenEd = $_GenEd;
    }

    function set_Colonnade($_Colonnade) {
        $this->_Colonnade = $_Colonnade;
    }

    function Populate($post){
        $this->setID((isset($post["ID"])) ? $post["ID"] : $this->_ID);
        $this->setNumber((isset($post["Number"])) ? $post["Number"] : $this->_Number);
        $this->setTitle((isset($post["Title"])) ? $post["Title"] : $this->_Title);
        $this->setHours((isset($post["Hours"])) ? $post["Hours"] : $this->_Hours);
        $this->setAndOr((isset($post["AndOr"])) ? $post["AndOr"] : $this->_AndOr);
        $this->setGenEd((isset($post["GenEd"])) ? $post["GenEd"] : $this->_GenEd);
        $this->setColonnade((isset($post["Colonnade"])) ? $post["Colonnade"] : $this->_Colonnade);
    }
    
    
    
}