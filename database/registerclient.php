<?php
include('conect.php');
$status=[];
if($_POST['id']==0)
 {
 $sql2="SELECT * FROM client WHERE tel='$_POST[tel]' OR email='$_POST[email]' OR
  nid='$_POST[nid]'";
 $sq_check=pg_query($con,$sql2);
 if(pg_num_rows($sq_check)>0)
   {
   $stat=array('statuss'=>'exit');
     array_push($status,$stat);
    echo sendRespo($status);
   }
 else{
  $sql1="INSERT INTO client(fname,lname,tel,email,nid) 
     VALUES('$_POST[fname]','$_POST[lname]','$_POST[tel]','$_POST[email]','$_POST[nid]')";
    if(pg_query($con,$sql1))
     {
        $stat=array('statuss'=>'insert');
        array_push($status,$stat);
        echo sendRespo($status);
     }
   else{
       $stat=array('statuss'=>'not');
       array_push($status,$stat);
       echo sendRespo($status);
   }
 }
 }
 else{
 echo 'No id found !!';
 }

function sendRespo($dd=[])
 {
   return json_encode($dd);
 }