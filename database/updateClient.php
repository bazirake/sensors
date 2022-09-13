<?php
 include('conect.php');
  $sql_1="UPDATE client SET fname='$_POST[fname]', lname='$_POST[lname]' WHERE cid='$_POST[id]' ";
  if(pg_query($con,$sql_1))
   {
    $data= array('update'=>'updated');
     echo sendUpdte($data);
   }
   else{
       $data= array('updates'=>'notupdated');
       echo sendUpdte($data);
   }
   function sendUpdte($data=[])
    {
    return json_encode($data);
    }
