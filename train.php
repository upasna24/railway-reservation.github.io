<!--<html>
<center>
<img src="g.jpg" style= "align:center"  height="200" width="400">
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
height:1200px;
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
height:950px;
width:400px;
background-color:lightblue;
}
#railway{
float:right;
height:950px;
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
<?php 
/*$m=$_POST['a'];
$n=$_POST['b'];
mysql_connect("localhost","root","");
mysql_select_db("railway");

$query="SELECT * FROM train WHERE source='$m' AND desination='$n'";
$result=mysql_query($query);


echo"<center>";
echo"<b>AVAILABLE TRAINS<b> :";

	echo"<tr>";
		echo"<table border='4'  class='stats' cellspacing='5'>";
		echo"<th>train no</th>";
		echo"<th>source</th>";
		echo"<th>destination</th>";
		echo"<th>seats</th>";
        echo"</tr>";
while($row=mysql_fetch_array($result))
{

//		echo"<table border='5' class='stats' cellspacing='10'>";
		
		echo"<tr>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]."</td>";
		echo"<td>".$row[2]."</td>";
		echo"<td>".$row[3]."</td>";
		echo"</tr>";
}
$query="SELECT * FROM registration WHERE name='$m' AND password='$o'";
$result=mysql_query($query);
$count=mysql_fetch_array($result);
if($count>0){
echo"<center>";
echo"<b>user already exists</b>";
echo"</center>";
}
		echo"</table>";
       echo"</center>";*/	
   
?>

<html>
<form method="POST" action="bookform.php">
<!--<center>-->
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
		<?php 
$m=$_POST['a'];
$n=$_POST['b'];
mysql_connect("localhost","root","");
mysql_select_db("railway");

$query="SELECT * FROM train WHERE source='$m' AND desination='$n'";
$result=mysql_query($query);


echo"<center>";
echo"<b>AVAILABLE TRAINS<b> :";

	echo"<tr>";
		echo"<table border='4'  class='stats' cellspacing='5'>";
		echo"<th>train no</th>";
		echo"<th>source</th>";
		echo"<th>destination</th>";
		echo"<th>seats</th>";
        echo"</tr>";
while($row=mysql_fetch_array($result))
{

//		echo"<table border='5' class='stats' cellspacing='10'>";
		
		echo"<tr>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]."</td>";
		echo"<td>".$row[2]."</td>";
		echo"<td>".$row[3]."</td>";
		echo"</tr>";
}
$query="SELECT * FROM registration WHERE name='$m' AND password='$o'";
$result=mysql_query($query);
$count=mysql_fetch_array($result);
if($count>0){
echo"<center>";
echo"<b>user already exists</b>";
echo"</center>";
}
		echo"</table>";
       echo"</center>";	
   
?>

		<br><br><br><br><br>
  <h1>PLEASE ENTER THE DETAILS IN ORDER TO BOOK YOUR SEATS:</h1></br>
</br>
		<fieldset>
		
		<br><br>
	    Train Number:<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		<input type="number" name="a" size="30" height="30px"   width="180px"><br><br><!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp--->
	    Number of seats to be booked:<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		 
        <input type="number" name="b" size="30" style="height:30px";></br><br><!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
        Enter your Name:<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		
        <input type="text" name="c" size="30" style="height:30px"; ></br><br><!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		 Enter your Email:<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		
        <input type="email" name="d" size="30" style="height:30px"; ></br><br><!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		 Enter your Phone number:<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		
        <input type="number" name="e" size="30" style="height:30px"; ></br><br><!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		 Enter your Password:<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
		
        <input type="password" name="f" size="30" style="height:30px"; ></br><br><!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->

        <input type="submit" value="Book" style="background-color:lightblue";>
        <input type="reset" value="RESET" style="background-color:lightblue";></br></br></fieldset>

					</center><br><br><br><br><br>
		</div>
	
	
	</div><br><br>
	<div id="footer">
	Copyright &copy 2017,centre for Railway Information System.
	</div>
	<!---<h1>PLEASE ENTER THE DETAILS IN ORDER TO BOOK YOUR SEATS:</h1></br>
</br>
TRAIN NO.:</br>
<input type="number" name="a" size="30"></br>
NO. OF SEATS TO BE BOOKED:</br>
<input type="number" name="b" size="30"></br>
NAME:</br>
<input type="text" name="c" size="30"></br>
EMAIL:</br>
<input type="email" name="d" size="30"></br>
PHONE:</br>
<input type="text" name="e" size="30"></br>
Password:</br>
<input type="password" name="f" size="30"></br>

<input type="submit" value="BOOK"></br>
<input type="reset" value="RESET"></br>

</center>-->
</form>


</html>