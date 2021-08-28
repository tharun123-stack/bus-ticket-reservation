<html>
<head>
<link rel="stylesheet" type="text/css" href="netbanking.css">
<script>
 function NewTab() { 
            window.open( 
              "redirect1.html","", "width=1080, height=1000"); 
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


/*echo("$s1");
echo("$us1");
echo("$age1");
echo("$gender1");*/
echo "<h3><STRONG>PASSENGER DETAILS</STRONG></h3>";
echo "<table align=center border=1 cellspacing=0 cellpadding=10>";
echo "<tr><th>S.no</th><th>Seat no</th><th>Passenger Name</th><th>Age</th><th>Gender</th></tr>";
echo "<tr><td>1</td><td>$s1</td><td>$us1</td><td>$age1</td><td>$gender1</td></tr>";

echo "</table>";

	

			$sql="INSERT INTO f1 (s1,us1,age1,gender1) values ('$s1','$us1','$age1','$gender1')";
			$query=mysqli_query($con,$sql);
			
			/*if($query)
			{
			echo "inserted";
			}
			else
			{
		    echo "not inserted";
			}*/
			
?>

<p align=right>Total Fare:<br> Rs.1200</p>

<input type=submit value="Proceed to Payment" onclick="NewTab();">
</body>
</html>