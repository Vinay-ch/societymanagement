<?php 

session_start();
header('location:login.html');

$con= mysqli_connect('localhost','root','vinaycharu@123');

mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$email = $_POST['e-mail'];
$flatno = $_POST['flatno'];
$password = $_POST['password'];
 
$s = "SELECT * from usertable where name='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	echo" USername Already Taken";
}
else{
	$reg=" INSERT into usertable(name,email,flatno,password) values('$name','$email','$flatno','$password')";
	mysqli_query($con,$reg);
	echo"Registration succesful"; 
}

?>