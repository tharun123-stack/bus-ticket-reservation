<html>
<head>
<link rel="stylesheet" type="text/css" href="netbanking.css">
<script>
 function NewTab() { 
            window.open( 
              "redirect2.html","", "width=1080, height=1000"); 
        }
</script>
</head>
<body align=center>
<?php
$con=mysqli_connect('localhost','root','','form2');
if(!$con)
{
echo "not connected to server";
}


$s1=$_POST['s1'];
$us1=$_POST['us1'];
$age1=$_POST['age1'];
$gender1=$_POST['gender1'];

$s2=$_POST['s2'];
$us2=$_POST['us2'];
$age2=$_POST['age2'];
$gender2=$_POST['gender2'];

/*echo("$s1");
echo("$us1");
echo("$age1");
echo("$gender1");

echo("$s2");
echo("$us2");
echo("$age2");
echo("$gender2");*/
echo "<h3><STRONG>PAYMENT DETAILS</STRONG></h3>";
echo "<table align=center border=1 cellspacing=0 cellpadding=10>";
echo "<tr><th>S.no</th><th>Seat no</th><th>Passenger Name</th><th>Age</th><th>Gender</th></tr>";
echo "<tr><td>1</td><td>$s1</td><td>$us1</td><td>$age1</td><td>$gender1</td></tr>";
echo "<tr><td>2</td><td>$s2</td><td>$us2</td><td>$age2</td><td>$gender2</td></tr>";
echo "</table>";

			$sql="INSERT INTO f1 (s1,us1,age1,gender1) values ('$s1','$us1','$age1','$gender1')";
			$query=mysqli_query($con,$sql);
			
			$sql1="INSERT INTO f1 (s1,us1,age1,gender1) values ('$s2','$us2','$age2','$gender2')";
			$query1=mysqli_query($con,$sql1);
			
			/*if($query)
			{
			echo "inserted";
			}
			else
			{
		    echo "not inserted";
			}
			
			if($query1)
			{
			echo "inserted";
			}
			else
			{
		    echo "not inserted";
			}*/
?>	
<p align=right>Total Fare:<br> Rs.2400</p>

<input type=submit value="Proceed to Payment" onclick="NewTab();">
</body>

</html>