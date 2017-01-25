<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Aptitude Training Test  -  </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="green">
<?php
include("header.php");
include("database.php");
extract($_SESSION);
$rs=mysql_query("select * from mst_user where status='0'",$cn) or die(mysql_error());

echo "<h1 class=head1> Approval List</h1>";

echo "<table border=1 align=center><tr class=style2><td width=300>USER NAME<td>ADDRESS<td>EMAIL_ID";
while($row=mysql_fetch_row($rs))
{
echo "<tr class=style8><td>$row[3] <td align=center> $row[4] <td align=center> $row[7]";
echo "<td><a href='solve_Online.php?id=$row[0]'><u>Approval</u></a></td>";
}
echo "</table>";
?>
</body>
</html>
