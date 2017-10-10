<?php

/* 
*===================================================|
*               Course Code: Comp1230            |==|
*				CRN: 12860					     |==|
*               Student ID:  100-978-464         |==|
*               Last Name:   Nobrega             |==|
*               First Name:  Thiago              |==|
*===================================================|
*/
?>
<?php
/*==================================================
				DATABASE CONNECTION				
===================================================*/
function DBConnect(){
		$sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE)or die(mysqli_error());	
		return $sql;
}// DBConnect


function DBClose($mysqli){
	@mysqli_close($mysqli) or die (mysqli_error($mysqli));
}//DBClose

?>


