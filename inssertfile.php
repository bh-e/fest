<?php

$file=$_FILES['file']['name'];

//ho $file;

move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$file);
include_once'dbprocess.php';
$obj=new dbprocess();
$result=$obj->fileuploadfac($file);
if($result>0)
{
    header("location:del.php");
}
else
{
    echo"failed";
}
?>
