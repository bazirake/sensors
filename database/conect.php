<?php

$server = "host=ec2-107-23-76-12.compute-1.amazonaws.com
 port=5432 dbname=d6naf2d9kjsjr5  user=ollyfeordxzeuu  password=e108789f83feae30bdd048e00fa71b553f3a54e47db583ab06de002d6b3cd2a4";
$con= pg_connect($server);
if(!$con){
  die("connection fail" . pg_errormessage($con));
}

?>