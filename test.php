<?php
require("config.php");
$sql_query="Select * from test_tb;";
$result=mysqli_query($db1,$sql_query);
$result=mysqli_query($db1,"INSERT INTO test_tbl (name,age) 
VALUES ('Name',50)");
if($result)
{
	echo"Done";
}

?>
