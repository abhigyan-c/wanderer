<?php
$name=$_POST['n1'];
$email=$_POST['n2'];
$mobile=$_POST['n3'];
$password=$_POST['n4'];
$con=new MySQLi("localhost","root","","opensource");
$sql="select * from register where Email='$email' or Phone='$mobile'";
echo $email;
echo $mobile;
$res=$con->query($sql);
$c=$res->num_rows;
if($c>=1)
{
	echo "<script>alert('email or mobile already registered')</script>";
	echo "<script>window.location.href='login.html'</script>";
}
else
{
	$sql1="insert into register values('$name','$email','$mobile','$password')";
	$con->query($sql1);
	echo "<script>alert('SUCCESSFULLY REGISTERED')</script>";
	echo "<script>window.location.href='login.html'</script>";
}
?>
