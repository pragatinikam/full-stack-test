<?php

define("HOST","localhost"); 
define("USER","root");   
define("PASSWORD","root");   
define("DATABASE","wpoets_db");
$con = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($con->connect_error){
	print'Database not found.';
    exit();
} 


$sql="SELECT description, picture FROM slider";
$run_sql=mysqli_query($con, $sql);

$json_array = array();

while($row=mysqli_fetch_assoc($run_sql))
{
	$nana[]=$row;
}

$nana[0]['description'];

?>
