<html>
<body>
<div align="center">
<h4>Edit Employee</h4>
<form action="php1.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<th>Name</th>
<td><input type="text" name="txtname">
</td>
<tr>
<th>Phone</td>
<td><input type="text" name="txtphone">
</td>
<tr>
<th>Email</td>
<td><input type="text" name="txtemail">
</td>
<tr>
<th>Gender</th>
<td><input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="Female">Female</td>
<tr>
<th>Hobbies</th>
<td><input type="checkbox" name="chkbox" VALUE="Listening to Music">Listening to Music</td>
</tr>
<tr>
<th>&nbsp</th>
<td><input type="checkbox" name="chkbox" VALUE="Reading">Reading</td>
</tr>
<tr>
<th>&nbsp</th>
<td><input type="checkbox" name="chkbox" VALUE="Browsing">Browsing</td>
</tr>
<tr>
<th>&nbsp</th>
<td><input type="checkbox" name="chkbox" VALUE="Playing">Playing</td>
</tr>
<tr>
<th>Profile Pic</th>
<td><input type="file" name="pflpic"></td>
</tr>
<tr>
<th>&nbsp</th>
<td>
<select name="select">
<option value="India">India</option>
<option value="USA">USA</option>
<option value="UAE">UAE</option></select>
</td>
</tr>
<tr>
<th colspan="2"><input type="submit" name="btn1" VALUE="Update"></th>
</tr>
</table>
</form>
</body>
</html>


<?php
$a=mysql_connect("localhost","root","");
$b=mysql_select_db("employee",$a);
?>

<?php
if(isset($_POST['btn1']))
{
$name=$_POST['txtname'];
$phone=$_POST['txtphone'];
$email=$_POST['txtemail'];
$gender=$_POST['gender'];
$hobbies=$_POST['chkbox'];
$img=$_POST['pflpic'];
$place=$_POST['select'];

$pic=$_FILES["pflpic"]["name"];
move_uploaded_file($_FILES["pflpic"]["tmp_name"],"img/".$_FILES["pflpic"]["name"]);

$ins=mysql_query("insert into employee(name,phone,email,gender,hobbies,photo,place) values('$name','$phone','$email','$gender','$hobbies','photo','place')");

}
?>