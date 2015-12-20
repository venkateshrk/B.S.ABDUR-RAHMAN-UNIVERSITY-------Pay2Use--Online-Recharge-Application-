<!DOCTYPE HTML>
<html>
<head>
<title> pay2use </title>
</head>
<body>
<?php
$nm=$_GET["no"];
$cardno=$_GET["op"];
$nm1=$_GET["am"];

mysql_connect("localhost","root","");
mysql_select_db("test");
mysql_query("insert into table12 values('$nm','$cardno','$nm1')");


?>
</body>
</html>
