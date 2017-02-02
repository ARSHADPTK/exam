<html>
<body>
<table border="2">
<tr bgcolor="lightblue">
<th>Si No</th>
<th>Pic</th>
<th>Name</th>
<th>phone</th>
<th>Email</th>
<th colspan="2">Action</th>
</tr>

<?php
$a=mysql_connect("localhost","root","");
$b=mysql_select_db("employee",$a);
?>

<?php

$disp=mysql_query("select * from emplyee");

$dis=$_fetch_array['disp'];
while
{
<tr>
<th> <?php echo $dis[0]; ?> </th>
<th> <?php echo $dis[1]; ?> </th>
<th> <?php echo $dis[2]; ?> </th>
<th> <?php echo $dis[3]; ?> </th>
<th> <?php echo $dis[4]; ?> </th>
<th><a>edit</a></th>
<th><a>delete</a></th>
}
?>
