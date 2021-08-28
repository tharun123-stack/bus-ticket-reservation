<html>
<head>
<style>
.buttons {
height: 30px;
border: none;
outline: none;
border-radius:5px;
background-color:#52D74D;
color: white;
}


.buttons:hover{
background-color:green;
}

</style>
<script>
function printDetails(det)
{
var restorepage=document.body.innerHTML;

var printcontent=document.getElementById(det).innerHTML;
document.body.innerHTML=printcontent;

window.print();
document.body.innerHTML=restorepage;

}
</script>
</head>
<body >
<div id="details">
<h1 align=left>ORDER CONFIRMATION</h1>
<table>
<tr>
<td style="border-right: 2px solid black;"><img src=logo2.JPG width=100px>&nbsp&nbsp&nbsp&nbsp</td>
<td >&nbsp&nbsp&nbsp e-TICKET</td>
</tr>
</table>
<br>

<table style="border-bottom: 2px solid BROWN;">
<tr>
<td>CHENNAI to BANGALORE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td>Monday, May 19, 2020</td>
</tr>
</table>
<br>
<BR>

<?php
$con=mysqli_connect('localhost','root','','form2');
// Check connection
if(!$con)
{
echo "not connected to server";
}

$sql = "SELECT * FROM f1 LIMIT 1";
$result = mysqli_query($con, $sql);

if ($result->num_rows >0) {
    echo "<table border=1 align=center><tr><th>SEAT</th><th>Name</th><th>Age</th><th>Gender</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["s1"]. "</td><td>" . $row["us1"]. "</td><td>" . $row["age1"]. "</td><td>" . $row["gender1"]. "</td></tr>";
  
 }
    echo "</table>";

}
  else {
    echo "0 results";
}

mysqli_close($con);
?>

<p align=right>Total Fare:<br> Rs.1200</p>
<br>
<br>
<br>
<p><font size=2pt>
<p><b><font color=red>Terms and Conditions:</font></b></p>

<b> The company undertakes no liability in case of cancellation of trips due to breakdown or for reasons beyond the control of the management. However proportionate refund of fare will be allowed in case no alternate arrangement is made.
</b>
<ol type=1>
<li>Smoking and consumption of alcohol is strictly prohibited in the coach.</li>
<li>Next to ladies seat should be ladies only if incase gents are there should ajusted with different seat*</li>
<li>Management is not responsible for your luggages/baggage.</li>
<li>Co-Seats of lady passenger to be confirmed to lady passenger only, no accomodation given to male passenger.</li>
<li>Changes to the origin and/or destination of travel and customer name changes are not permited.</li>
<li>Any passenger disturbing the co-passengers is liable to be alighted from the coach.</li>
<li>Seats Wiil Be Confirmed Only After Sucessful Payment. ( Depending Upon Seat Avaliablity)</li>
<li>The passenger should carry the same identity card while travelling. If not this will be treated as ticket less travelling.</li>
<li>The cancellation refund will be provided as a cash coupon with an expiry time of one year. You can use this cash coupon anytime with in that one year to do any further bookings.</li>
<li>Cash coupon may be redeemed as a refund to your respective Credit/Debit Card account with in 30 days of the ticket cancellation.  The amount will be credited in your account with in 3 to 6 working days after the refund initiation. The refund cash coupon amount would carry a Payment Gateway transaction charge of 5%.
Yesterday's Tickets cannot be cancelled. </li>
<li>You cannot cancel the ticket before 8 hour(s) of the departure.</li>
<li>The refund amount will be sent to you as a cash coupon to your email with one Year validity.</li>
</ol>
</font>

</P>
</div>
<p align=center>
<button class="buttons" onclick="printDetails('details')">Print ticket</button>
<button  class="buttons" onclick="window.location.href='send.php'">Send Mail</button>	</p>
</body>
</html>