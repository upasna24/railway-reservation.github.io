<!--<html>
<center>
<img src="g.jpg" style= "align:center"  height="300" width="500">
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
		
		<br><br>
	

<?php
$m=$_POST['a'];


if($m=="")
{
echo"<center>";
echo"<b>OOPS!!! Field blank</b>";
echo"</center>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("railway");
	$query="SELECT * FROM booking WHERE pnr='$m'";
	$result=mysql_query($query);
	$count=mysql_fetch_array($result);
	if($count>0)	{
		$query1="SELECT * FROM booking WHERE pnr='$m'";
		$result1=mysql_query($query1);
           echo"<center>";
		   
			echo"<tr>";
		echo"<table border='1' class='stats' cellspacing='5'>";
		echo"<th>name</th>";
		echo"<th>email</th>";
		echo"<th>phone</th>";
		echo"<th>seats</th>";
		echo"<th>train no</th>";
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
		}
		else{
		echo"<center>";
		echo"<b>Incorrect PNR</b>";
		echo"</center>";
		}
		}
	
		
?>
<form>
<center>
</br></br>
<button onclick="location.href='cancel.php'" type="button" style="height:30px;background-color:lightblue;">CANCEL BOOKING</button>
<button onclick="location.href='trainform.php'" type="button" style="height:30px;background-color:lightblue;" >BACK</button></fieldset>
</center>
</form>
</html>