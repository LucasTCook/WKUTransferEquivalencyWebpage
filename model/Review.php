<?php

class Review extends base{
    
    public $_ID;
    public $_TransferCourse;
    public $_WKUCourse;
    public $_Status;
    public $_TimeOfDecision;
    public $_Comments;
    
    public function __construct($id = ''){
	if($id != ''){
            $this->setID($id);
            $this->Find($this);
	}
    }  
    
    function get_ID() {
        return $this->_ID;
    }

    function get_TransferCourse() {
        return $this->_TransferCourse;
    }

    function get_WKUCourse() {
        return $this->_WKUCourse;
    }

    function get_Status() {
        return $this->_Status;
    }

    function get_TimeOfDecision() {
        return $this->_TimeOfDecision;
    }

    function get_Comments() {
        return $this->_Comments;
    }

    function set_ID($_ID) {
        $this->_ID = $_ID;
    }

    function set_TransferCourse($_TransferCourse) {
        $this->_TransferCourse = $_TransferCourse;
    }

    function set_WKUCourse($_WKUCourse) {
        $this->_WKUCourse = $_WKUCourse;
    }

    function set_Status($_Status) {
        $this->_Status = $_Status;
    }

    function set_TimeOfDecision($_TimeOfDecision) {
        $this->_TimeOfDecision = $_TimeOfDecision;
    }

    function set_Comments($_Comments) {
        $this->_Comments = $_Comments;
    }


    function Populate($post){
        $this->setID((isset($post["ID"])) ? $post["ID"] : $this->_ID);
        $this->setTransferCourse((isset($post["TransferCourse"])) ? $post["TransferCourse"] : $this->_TransferCourse);
        $this->setWKUCourse((isset($post["WKUCourse"])) ? $post["WKUCourse"] : $this->_WKUCourse);
        $this->setStatus((isset($post["Status"])) ? $post["Status"] : $this->_Status);
        $this->setTimeOfDecision((isset($post["TimeOfDecision"])) ? $post["TimeOfDecision"] : $this->_TimeOfDecision);
        $this->setComments((isset($post["Comments"])) ? $post["Comments"] : $this->_Comments);
    }
    
    
}