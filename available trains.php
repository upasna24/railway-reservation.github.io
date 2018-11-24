<html>
<head>
<style>
fieldset
{
	width:800px;
	border:1px solid lightblue;
	Font-Size:20px;
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
table,th,td,tr
{
border:1px solid blue;
border-collapse:collapse;
}
th,td{
padding:20px;
}
th{
background-color:lightblue;
}


</style>
</head>
<form method="POST" action="available trains.php">
<div id="outer">
	<div id="menu">
	<ul>
	<li><a href="railwayform.php">Home</a></li>
	<li><a href="pnr.php">Pnr Enquiry</a></li>&nbsp;&nbsp;&nbsp
	<li><a class="active" href="availability.php">Availability</a></li>&nbsp;&nbsp;&nbsp
	<li><a href="about.php">About<a></li>&nbsp;&nbsp;&nbsp

	</ul>
	</div>

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
		<center><b style="Font-Size:30px">You Queried For:</b></br></br></center>
		<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
if($m==''||$n==''||$o=='')
{
 echo"<center>";
 echo"fill all the blanks!!!";
 echo"</center>";
 }
 else
 {
mysql_connect("localhost","root","");
mysql_select_db("railway");

$query="SELECT * FROM train WHERE source='$n' AND desination='$o' AND trainno='$m' AND (avlseats!='0')";
$result=mysql_query($query);
$count=mysql_fetch_array($result);
if($count>0)


//$query="SELECT * FROM train WHERE(avlseats!='0')";
//$result=mysql_query($query);


//echo"<center>";

{
$query1="SELECT * FROM train WHERE source='$n' AND desination='$o' AND trainno='$m' AND (avlseats!='0')";
		$result1=mysql_query($query1);
		echo"<center>";
//echo"<b><br><br>AVAILABLE TRAINS<b> :";
echo"<tr>";
		echo"<table border='4'  class='stats' cellspacing='5'>";
		echo"<th>train no</th>";
		echo"<th>source</th>";
		echo"<th>destination</th>";
		echo"<th>seats</th>";
        echo"</tr>";


//		echo"<table border='5' class='stats' cellspacing='10'>";
		while($row=mysql_fetch_array($result1))
		{
		echo"<tr>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]."</td>";
		echo"<td>".$row[2]."</td>";
		echo"<td>".$row[3]."</td>";
		echo"</tr>";
}
echo"</table>";
echo"</center>";
}
else
{
echo "incorrent enteries!!!";

}
}		
		
	
?>
<html>
<body><br><h4><a href="railwayform.php">Register or Login to Book Now</a></h4></body>
</html>

  
		
	
	</div><br><br>
	<div id="footer">
	Copyright &copy 2017,centre for Railway Information System.
	</div>
	
</div>
</form>
</html>


