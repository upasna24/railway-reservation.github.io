<html>
<form>
<center>

<img src="logo.jpg" style= "align:center"  height="150" width="200">
<body background="t3.jpg" >
  </body>
<h1> SUCCESSFULLY LOGGED IN </h1> </br>
</form>
</center>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("railway");

$query="SELECT * FROM train WHERE(avlseats!='0')";
$result=mysql_query($query);

?>
<html>
<form method="POST" action="train.php">
<center>
<h2> Enter the details in order to book your tickets:</h2></br>
</br>

<p style="font-size:30px;">Source:
<input type="text" name="a" size="30" style="height:30px;width:300px;"> </br>

<p style="font-size:30px;">Destination:
<input type="text" name="b" size="30" style="height:30px; width:300px;"> </br>
<input type="submit" value="ok" style="height:30px; width:100px;"> </br>
<input type="reset" value="reset" style="height:30px; width:100px;"> </br>
<button onclick="location.href='railwayform.php'" type="button" style="height:20px; width:100px;">HOME</button>
<button onclick="location.href='booked.php'" type="button" style="height:20px; width:100px;">BOOKINGS</button>

</center>
</form>
</html>