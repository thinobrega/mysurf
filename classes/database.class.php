<?php
include_once("config.class.php");


	?>


<?php

class database{

public function __construct(){	
		$conn =  mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)or die(mysqli_error());	
		return $conn;
}//construct


public function insert ($object){

	$sql =  "INSERT INTO ".$object->table." (";
	for($i=0; $i<count($object->field_values); $i++):
	$sql .= key($object->field_values);
	if($i<(count($object->field_values)-1)):
		$sql .= ", ";
	else:
		$sql .= ") ";
	endif;
	next($object->field_values);
	endfor;
	reset($object->field_values);
	$sql .= "VALUES (";
	for($i=0; $i<count($object->field_values); $i++):
	$sql .= is_numeric($object->field_values[key($object->field_values)]) ? 
	$object->field_values[key($object->field_values)] :
	"'".$object->field_values[key($object->field_values)]."'";
	if($i<(count($object->field_values)-1)):
	$sql .= " , ";
	else:
		$sql .= " ) ";
	endif;
	next($object->field_values);
	endfor;
	
	echo $sql;
	return $this->executeSQL($sql);
	
	
}//insert
	
	public function executeSQL($sql =null){

		$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
		if($sql!=null):
		$query = mysqli_query($conn,$sql) or die();
		//$this->linhasafetadas=mysqli_affected_rows($this->conn);
		if(substr(trim(strtolower($sql)),0,6)=='select'):
		$this->dataset=$query;
		return $query;
		else:
			die();//return $this->linhasafetadas;
		endif;
		else:
		die();
		endif;
	}//executa sql
	
	
	
	
	public function update($object){
			
	$sql =  "UPDATE ".$object->table." SET ";
	for($i=0; $i<count($object->field_values); $i++):
	$sql .= key($object->field_values)."=";
	$sql .= is_numeric($object->field_values[key($object->field_values)]) ? 
	$object->field_values[key($object->field_values)] :
	"'".$object->field_values[key($object->field_values)]."'";
	if($i<(count($object->field_values)-1)):
		$sql .= " , ";
	else:
		$sql .= " ";
	endif;
	next($object->field_values);
	endfor;
	
	$sql .="WHERE ". $object->fieldpk."=";
	$sql .= is_numeric($object->valuepk) ? $object->valuepk : "'".$object->valuepk."'";
	return $this->executeSQL($sql);
		
	}
	
	public function del($object){
	
	$sql =  "DELETE FROM ".$object->table;
	$sql .= " WHERE ". $object->fieldpk."=";
	$sql .= is_numeric($object->valuepk) ? $object->valuepk : "'".$object->valuepk."'";
		echo $sql;
	return $this->executeSQL($sql);
		
	}//del
	public function selecionaTudo($object){
			$sql = "SELECT *FROM ".$object->table;
			if($object->extras_select != null):
			$sql .= " ".$object->extras_select;
			endif;
			return $this->executeSQL($sql);
		
	}//selecionaTudo
	
		public function selectFields($object){
			$sql = "SELECT ";
			for($i=0; $i<count($object->field_values); $i++):
	$sql .= key($object->field_values);
	if($i<(count($object->field_values)-1)):
		$sql .= " , ";
	else:
		$sql .= " ";
	endif;
	next($object->field_values);
	endfor;
			
			
			
			
			$sql .= " FROM ".$object->table;
			if($object->extras_select != null):
			$sql .= " ".$object->extras_select;
			endif;
			return $this->executeSQL($sql);
		
	}//selectFields
	
	public function returnDada($tipo=null){
			switch(strtolower($tipo)):
			case"array":
			return mysqli_fetch_array($this->dataset);
			break;
			case "assoc":
			return mysqli_fetch_assoc($this->dataset);
			break;
			case "object":
			return mysqli_fetch_object($this->dataset);
			break;
			default:
			return mysqli_fetch_object($this->dataset);
			break;
			endswitch;
		
	}
}//banco
	
	
	
	
?>