<?php

class Course extends base {
    public $_ID;
    public $_SchoolID;
    public $_Number;
    public $_Title;
    public $_Hours;
    public $_Equivalent;
    public $_Review;
    
    public function __construct($id = ''){
	if($id != ''){
		$this->setID($id);
		$this->Find($this);
	}
    }  
    
    
    function get_Review() {
        return $this->_Review;
    }

    function set_Review($_Review) {
        $this->_Review = $_Review;
    }

        function get_Status() {
        return $this->_Status;
    }

    function get_TimeOfDecision() {
        return $this->_TimeOfDecision;
    }

    function set_Status($_Status) {
        $this->_Status = $_Status;
    }

    function set_TimeOfDecision($_TimeOfDecision) {
        $this->_TimeOfDecision = $_TimeOfDecision;
    }
    
    public function getID(){
	return $this->_ID;
    }

    public function setID($_ID){
	$this->_ID = $_ID;
    
    }
    public function getSchoolID(){
	return $this->_SchoolID;
    }

    public function setSchoolID($_SchoolID){
	$this->_SchoolID = $_SchoolID;
    
    }
    
    public function setNumber($_Number){
	$this->_Number = $_Number;
    
    }
    
    public function getNumber(){
        return $this->_Number;
    }

    public function setTitle($_Title){
	$this->_Title = $_Title;
    
    }
    
    public function getTitle(){
        return $this->_Title;
    }
    
    public function setHours($_Hours){
	$this->_Hours = $_Hours;
    
    }
    
    public function getHours(){
        return $this->_Hours;
    }
    
    public function setEquivalent($_Equivalent){
	$this->_Equivalent = $_Equivalent;
    
    }
    
    public function getEquivalent(){
        return $this->_Equivalent;
    }


    function Populate($post){
        $this->setID((isset($post["ID"])) ? $post["ID"] : $this->_ID);
        $this->setSchoolID((isset($post["SchoolID"])) ? $post["SchoolID"] : $this->_SchoolID);
        $this->setNumber((isset($post["Number"])) ? $post["Number"] : $this->_Number);
        $this->setTitle((isset($post["Title"])) ? $post["Title"] : $this->_Title);
        $this->setHours((isset($post["Hours"])) ? $post["Hours"] : $this->_Hours);
        $this->setEquivalent((isset($post["Equivalent"])) ? $post["Equivalent"] : $this->_Equivalent);
        $this->setReview((isset($post["Review"])) ? $post["Review"] : $this->_Review);
    }
    
    
    
}