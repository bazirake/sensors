<?php
 include('conect.php');
$client=[];
 if ($_GET['id']>0)
 {
  $sql1="SELECT * FROM client WHERE cid='$_GET[id]'";
  $sql1_run=pg_query($con,$sql1);
   if($sql1_run)
     {
       while($result=pg_fetch_object($sql1_run))
         {
           $cl=array(
              'id'=>$result->cid,
              'fname'=>$result->fname,
              'lname'=>$result->lname,
              'tel'=>$result->tel,
              'email'=>$result->email,
              'nid'=>$result->nid,
              'dates'=>$result->dates
             );
             array_push($client,$cl);
         }
         echo sendClientData($client);
     }
     else{
         echo "It does not run";
     }
   }
  else{
    $cl=array('id'=>$_GET['id']);
      array_push($client,$cl);
      echo sendClientData($client);
  }

 function sendClientData($d=[])
  {
    return json_encode($d);
  }
  

?>