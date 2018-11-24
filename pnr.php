<html>
<head>
<style>
fieldset
{
	width:500px;
	border:1px solid lightblue;
	Font-Size:20px;
}
legend
{
Font-Size:30px;
}
#outer{
height:1000px;
width:1500px;
//border:1px solid white;
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
   padding: 16px 16px ;
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
//border:1px solid lightblue;
}
#footer
{
height:100px;
width:1500px;
//background-color:gray;
}

</style>
</head>
<form method="POST" action="findpnr.php">
<div id="outer">
	<div id="menu">
	<ul>
	<li><a href="railwayform.php">Home</a></li>
	<li><a class="active" href="pnr.php">Pnr Enquiry</a></li>&nbsp;&nbsp;&nbsp
	<li><a href="availability.php">Availability</a></li>&nbsp;&nbsp;&nbsp
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

		<fieldset style="background-color:lightblue";>Passenger Current Status Enquiry</fieldset>
		<p id="date"></p>
		<script>
		document.getElementById("date").innerHTML=Date();
		</script>
		<br><br><br><br><br>
  
		<fieldset>
		<legend>Enter the 10 digit PNR for your booking below to get the current status.</legend>
		<br><br>
		Enter PNR No.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="number" name="a" size="30" style="height:30px";><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="submit" value="Submit" style="background-color:lightblue";>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="reset" value="Reset" style="background-color:lightblue";></br></fieldset>

		</center><br><br><br><br><br>
		</div>
	
	
	</div><br><br>
	<div id="footer">
	Copyright &copy 2017,centre for Railway Information System.
	</div>
	
</div>
</form>
</html>
