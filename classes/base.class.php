<?php
require_once("database.class.php");

abstract class base extends database{

	//properties
	public $table="";
	public $field_values = array();
	public $fieldpk = NULL; //pk = primary-key
	public $valuepk = NULL;
	public $extras_select = "";
	
	//metodos
	public function addField($field=null,$value=null){
		if($field!=null):
		$this->field_values[$field]=$value;
		endif;
	}//add-Field
	public function delField($field=null){
		if(array_key_exists($field,$this->field_values)):
		unset($this->field_values[$field]);
		endif;
	}//delField
	
	public function setValue($field=null,$value=null){
		if($field!=null&&$value!=null):
		$this->field_values[$field]=$value;
		endif;
		
		
	}//setValue
	public function getValue($field=null){
		if($field!=null&& array_key_exists($field,$this->field_values)):
		return $this->field_values[$field];
		else:
		return false;
		endif;
		
	}//getValue
	
	
	
} //fim classe banco

?>