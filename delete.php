<html>
<center>
<!--<img src="g.jpg" style= "align:center"  height="300" width="500">-->
<body background=homebg.jpg>
  </body>
</center>
</html>


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
		$query1="DELETE FROM booking WHERE pnr='$x'";
		mysql_query($query1);
		echo"<center>";
		echo '<span style="color:blue;text-align:center;margin-top:100px;font-size:60px; font-family:verdena; "><br><br>BOOKING CANCELLED<br><br></span>';
		echo"</center>";
		$query2="UPDATE train SET avlseats=avlseats+$count[3] WHERE trainno='$count[4]'";
		
		}
		else{
		echo"<center>";
		echo"<b>Incorrect PNR</b>";
		echo"</center>";
		}
		}
	
		
?>
<html>
<center>
<button onclick="location.href='railwayform.php'" type="button" style="height:30px;width:150px;background-color:lightblue;">HOME</button>
<button onclick="location.href='logout.php'" type="button" style="height:30px;width:150px;background-color:lightblue;">Logout</button>
</center>
</html>