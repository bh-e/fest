
<?php
$id=$_GET['id'];
include("header.php");
include("database.php");
//extract($_SESSION);
$rs=mysql_query("update mst_user set status=1 where user_id=$id",$cn) or die(mysql_error());
if($rs>0)
{
   header("location:approval.php");
}



