<?php

$mysqli=new mysqli(hostname:"localhost",username:"root",password:"",database:"pizza_db");
if($mysqli->connect_errno){
    die("connection failed: ".$mysqli->connect_error);
}
return $mysqli;
?>