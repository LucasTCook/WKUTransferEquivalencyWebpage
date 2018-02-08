<?php

class School extends base{
public $_ID;
public $_Name;
public $_City;
public $_State;

public function __construct($id = ''){
	if($id != ''){
		$this->setID($id);
		$this->Find($this);
	}
}

public function getID(){
	return $this->_ID;
}

public function getName(){
	return $this->_Name;
}

public function getCity(){
	return $this->_City;
}

public function getState(){
	return $this->_State;
}

public function setID($_ID){
	$this->_ID = $_ID;
}

public function setName($_Name){
	$this->_Name = $_Name;
}

public function setCity($_City){
	$this->_City = $_City;
}

public function setState($_State){
	$this->_State = $_State;
}

function Populate($post){
    $this->setID((isset($post["ID"])) ? $post["ID"] : $this->_ID);
    $this->setName((isset($post["Name"])) ? $post["Name"] : $this->_Name);
    $this->setCity((isset($post["City"])) ? $post["City"] : $this->_City);
    $this->setState((isset($post["State"])) ? $post["State"] : $this->_State);
}
}

?>
