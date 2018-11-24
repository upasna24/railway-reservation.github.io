<!--<html>
<center>
<img src="g.jpg" style= "align:center"  height="150" width="500">
<body >
  </body>
</center>

</html>-->
<html>
<head>
<style>
fieldset
{
	width:800px;
	border:1px solid lightblue;
	Font-Size:20px;
}
input{
width:150px;
height:30px;
}

#outer{
height:1000px;
width:1500px;
border:1px solid white;
}
#menu{
height:50px;
width:1500px;
border:1px solid black;
background-color:black;
color:white;
}
#menu ul{
list-style-type:none;
overflow:hidden;
padding:0px;
margin:0px;
}
#menu ul li{
display:inline;
//border:1px solid black;
//padding:10px;
float:left;
}
#menu ul li a {
   display: block;
    color: white;
    text-align: center;
   padding: 16px 16px;
    text-decoration: none;
}
a:hover:not(.active)
 {
   background-color: #111;
}
.active {
background-color:#4CAF50;
}
#image{
float:left;
height:850px;
width:400px;
background-color:lightblue;
}
#railway{
float:right;
height:850px;
width:1100px;
background-color:white;
}
#parents{
height:850px;
width:1500px;
background-color:gray;
border:1px solid lightblue;
}
#footer
{
height:100px;
width:1500px;
//background-color:gray;
}

</style>
</head>
<div id="parents">
		<div id="image">
		<img src="logo.jpg" style="align:left" height="200" width="200">
		</div>
		<div id="railway">
		<center>
		<!--<img src="g.jpg" style= "align:center"  height="150" width="400">-->
		<body >
		</body>
	
		<h1>Indian Railway Passenger Reservation Enquiry</h1><br>
		<marquee behavior="scroll" direction="left">Please help Indian Railway and government of India in moving towards a digitized and cashless economy.Eradicate black money.</marquee><br><br>

		<fieldset style="background-color:lightblue";>Accomodation Availability Enquiry on Trains.</fieldset>
		<p id="date"></p>
		<script>
		document.getElementById("date").innerHTML=Date();
		</script>
		<br><br><br><br><br>
  
		<fieldset>
		
<?php 
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];
$q=$_POST['e'];
$r=$_POST['f'];

if($m==""||$n==""||$o==""||$p==""||$q==""||$r=="")
{
echo"<center>";

echo"<b>Fill all fields</b>";
echo"</center>";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("railway");
$query="SELECT * FROM train WHERE trainno='$m'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$query7="SELECT * FROM registration WHERE name='$o' AND password='$r'";
$res=mysql_query($query7);
$con=mysql_fetch_array($res);
if($con!=0)
{
if( $row[3]<$n)
{
echo"<center>";
echo"<b>SORRY...!!! Only $row[3] seats are available</b>";
echo"</center>";
}
else{
$query1="UPDATE train SET avlseats=avlseats-$n WHERE trainno='$m'";
mysql_query($query1);
$query2="INSERT INTO booking(name,email,phone,seats,trainno) VALUES('$o','$p','$q','$n','$m')";
$query3="ALTER TABLE `booking` AUTO_INCREMENT=1000000000";
mysql_query($query2);
mysql_query($query3);
echo"<center>";
echo"<b>DETAILS ARE AS FOLLOWS</b>";
echo"</center>";
$query4="SELECT * FROM booking WHERE name='$o' AND email='$p' AND phone='$q'";
$result1=mysql_query($query4);
echo"<center>";

   echo"<table border='4'>";
  echo"<tr>";		
		echo"<th>name</th>";
		echo"<th>email</th>";
		echo"<th>phone</th>";
		echo"<th>Book seats</th>";
		echo"<th>Train no</th>";
		echo"<th>PNR NO</th>";
		echo"</tr>";


while($row=mysql_fetch_array($result1))
{      
		//echo"<table border='4'>";
		echo"<tr>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]."</td>";
		echo"<td>".$row[2]."</td>";
		echo"<td>".$row[3]."</td>";
		echo"<td>".$row[4]."</td>";
		echo"<td>".$row[5]."</td>";
		echo"</tr>";
		
		}
echo"</table>";		
	echo"</center>";
		$query6="UPDATE registration SET pnr=$row[4] WHERE name='$o' AND password='$r'";
		mysql_query($query6);
		echo"<center>";
		echo"<b>successfully booked the seats</b>";
		echo"</center>";

}}
else{
echo"<center>";
echo"<b>incorrect name or password </b>";
echo"</center>";
}
}
?>
<html>
<form>
<center>
<button onclick="location.href='booked.php'" type="button" >CANCEL BOOKING</button>

<button onclick="location.href='railwayform.php'" type="button" >HOME</button></fieldset>
</center>
</form>
</html>
