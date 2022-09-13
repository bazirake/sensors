<?php
include('conect.php');

$sql1="DELETE FROM client WHERE cid='$_GET[id]'";
$sql1_run=pg_query($con,$sql1);
if ($sql1_run)
{
 $ad=array('cdata'=>'deleted');
  echo sendDelete($ad);
}
else{
  $ad=array('not'=>'notdeleted');
  echo sendDelete($ad);
}

function sendDelete($re=[])
 {
   return json_encode($re);
 }