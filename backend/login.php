<?php

	$id=$_POST['n1'];
	$pass=$_POST['n2'];
	$con=new MySQLi("localhost","root","","opensource");
	$sql="select * from register where Email='$id' and Password='$pass' or Phone='$id' and Password='$pass' ";
	$res=$con->query($sql);
	$c=$res->num_rows;
	if($c>=1)
	{
        echo "<script>alert('YOU ARE SUCCESSFULLY LOGGED IN')</script>";
		echo "<script>window.location.href='#'</script>";
	}
	else
	{
		echo "<script>alert('Invalid user,First Sign Up')</script>";
	}
?>
