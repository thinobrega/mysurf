<?php
require_once("base.class.php");
require_once("database.class.php");

class users extends base{
	
public function __construct($fields=array()){
	parent::__construct();
	$this->table="infom";
	if(sizeof($fields)<=0):
		$this->field_values=array(
			"name" => null,
			"lname" => null,
			"age" => null,
			"email" => null,
			"sex" => null,
			"pass" => null
	
		);
	else:
	$this->field_values=$fields;
	endif;
	$this->fieldpk="id";
}//construct


public function dologin($object){
	$object->extras_select=" WHERE email = '" .$object->getValue('email')." ' AND pass = '".$object->getValue('pass')"";
	$this->selecionaTudo($object);
	if($this->linhasafetadas==1):
	return tru;
	else:
	return false;
	endif;
	
}
}//fim class clients










































?>