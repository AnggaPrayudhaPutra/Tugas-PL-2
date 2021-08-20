<?php

class Database{
// Property
var $host = "localhost";
var $uname = "root";
var $pass = "";
var $db = "angga_pl12";
var $connection;


function Connect(){
$this->connection=mysqli_connect($this- >host, $this->uname, $this->pass,$this->db);
return $this->connection; } }
?>