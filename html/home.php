<!DOCTYPE html>
<html>
<head><title>Sign Up </title>
</head>
<center><body background= "">
#add a background here
<h2> Register</h2>
<form action="home.php" method = "post">
<table border = "1" width = "300" height = "150">
<tr>	<td>Name:</td>
		<td><input type = "text" name = "name">
</tr>
<tr>	<td>Password:
		<td><input type = "password" name = "password"></td>
</tr>
<tr>	<td>Email :</td>
		<td><input type = "text" name = "email"></td>
</tr>
<tr>	<input type = "submit" name = "signup" value = "signup"></tr>
<tr>	<td colspan = "5" align = "center"> <input type = "submit" name = "signup" value = "signup"></td>
</tr>
</table>

</form>
</body></center>
</html>
<?php
mysql_connect|("localhost","root","") or die (mysql_error());
mysql_select_db("reg"); or die (mysql_error());

if (isset($_POST['signup']))
{
	 $name = $_POST['name'];
     $pass = $_POST['password'];
     $emailid = $_POST['email'];
     if($name == '')
     {
     echo "<script>alert('Please enter the name')</script>";
     exit();
     }
      if($password == '')
     {
     echo "<script>alert('Please enter the password')</script>";
     exit();
     }
      if($emailid == '')
     {
     echo "<script>alert('Please enter the email')</script>";
     exit();
     }
     else {
     $query = " insert into user ( name, password, email) values ('$name','$pass','$emailid')";
     if(mysql_queryy($query)){
     echo "<h3> You have registered successfully!! </h3>"
		}
	}
	?>
