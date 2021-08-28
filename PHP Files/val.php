<html>
<head>
<title>db</title>
</head>
<body align=center>
<?php
$con=mysqli_connect('localhost','root','','project');
if(!$con)
{
echo "not connected to server";
}


$pname1=$_POST['pname1'];
$uname1=$_POST['uname1'];
$pass1=$_POST['pass1'];
$age1=$_POST['age1'];
$gender=$_POST['gender'];
$phone1=$_POST['phone1'];
$email1=$_POST['email1'];
$aadhar1=$_POST['aadhar1'];
$address1=$_POST['address1'];


	

			$sql="INSERT INTO s2 (pname1,uname1,pass1,age1,gender,phone1,email1,aadhar1,address1) values ('$pname1','$uname1','$pass1','$age1','$gender','$phone1','$email1','$aadhar1','$address1')";
			$query=mysqli_query($con,$sql);
			
			if($query)
			{
			echo "<p>Details Stored!!</p>";
			}
			else
			{
		    echo "not inserted";
			}
			
?>			
			
		

</body>

</html>