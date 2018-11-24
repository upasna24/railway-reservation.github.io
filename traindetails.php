<?php 

mysql_connect("localhost","root","");
mysql_select_db("railway");

$query="SELECT * FROM train WHERE (avlseats!='0'))";
$result=mysql_query($query);

echo"AVAILABLE TRAINS :";

while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
		echo"<table border='5'>";
		echo"<tr>";
		echo"<td>".$row[0]."</td>";
		echo"<td>".$row[1]."</td>";
		echo"<td>".$row[2]."</td>";
		echo"<td>".$row[3]."</td>";
		echo"</tr>";
		echo"</table>";
	
		}
		



?>