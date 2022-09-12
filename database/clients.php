
<?php
include('conect.php');
$sql_1="SELECT * FROM client";
$sql_1_result=pg_query($sql_1);
if ($sql_1_result)
{
  $data=[];
  $i=1;
 while($res=pg_fetch_object($sql_1_result))
   {
  $add_data=array(
   'cid'=>$res->cid,
   'fname'=>$res->fname,
   'lname'=>$res->lname,'tel'=>$res->tel,
   'email'=>$res->email,'nid'=>$res->nid,
   'dates'=>$res->dates,
   'no'=>$i );
     array_push($data,$add_data);
     $i++;
   }
   echo sendClients($data);
}
 function sendClients($cl=[])
  {
   $ss=array('data'=>$cl);
   return json_encode($ss);
  }
