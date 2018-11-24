<html>
<center>
 <h1>INDIAN RAILWAY SYSTEM</h1> 
  <img src="logo.jpg" style= "align:center"  height="200" width="200">
  <br>
  <br>
  
  <body background="t3.jpg">
  
  </body>
  </center>
 </html>
<?php

$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];

if($m==""||$n==""||$o==""||$p=="")
{ echo"<center>";
echo"<b>OOPS!!! Field blank</b>";
echo"</center>";
}
else{
mysql_connect("localhost","root","");
mysql_select_db("railway");
$query="SELECT * FROM registration WHERE name='$m' AND password='$o'";
$result=mysql_query($query);
$count=mysql_fetch_array($result);
if($count>0){
echo"<center>";
echo"<h1>user already exists</h1>";
echo"</center>";
}
else{

$query1="INSERT INTO registration(name,email,password,phone) VALUES('$m','$n','$o','$p')";
mysql_query($query1);
echo"<center>";
echo"<h1>successfully added :</h1>";
//echo"</center>";
//$query3="SELECT * FROM registration WHERE name='$m' AND password='$o'";
//$result1=mysql_query($query3);

//echo"<center>";
//echo"<table border='4'>";
	//	echo"<tr>";
		//echo"<th>name</th>";
		//echo"<th>email</th>";
		//echo"<th>password</th>";
		//echo"<th>phone</th>";
		//echo"</tr>";
//while($row=mysql_fetch_array($result1))
//{
//echo"<tr>";
	//	echo"<td>".$row[0]."</td>";
		//echo"<td>".$row[1]."</td>";
		//echo"<td>".$row[2]."</td>";
		//echo"<td>".$row[3]."</td>";
		//echo"</tr>";
		//}
	

		//echo"</table>";		
}
echo"</center>";
}

?>
<html>
<center>
<button onclick="location.href='loginform.php'" type="button" >LOGIN</button>
<button onclick="location.href='railwayform.php'" type="button" >HOME</button>
<button onclick="location.href='registrationform.php'" type="button">BACK</button>
</center>

</html>