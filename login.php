<html>
<center>
<img src="C:\Users\DELL\Downloads\w.png" style= "align:center"  height="100" width="100">
<body background="C:\Users\DELL\Downloads\train.jpg" >
  </body>
</center>
</html>
<?php
session_start();
$m=$_POST['a'];
$n=$_POST['b'];

if($m==""||$n=="")
{
echo"<center>";
echo"<b>OOPS!!!.. FILL ALL FIELDS</b>";
echo"</center>";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("railway");

$query="SELECT * FROM registration WHERE name='$m' AND password='$n'";
$result=mysql_query($query);
$con=mysql_fetch_array($result);




if($con!=0){
$_SESSION['name']='$m';


session_start();

if(isset($_SESSION['name']))
{
echo"<center>";
echo"<b>successfully logged in</b>";
echo"</center>";
echo $_SESSION['name'];



header("location:trainform.php");
//echo"<a href='logout.php'>LOGOUT</a>";
}
else{
header("location:login.php");
}

}
else{
echo"<center>";
echo"<b>incorrect entries</b>";
echo"</center>";
}
}


?>

<html>
<center>
<button onclick="location.href='railwayform.php'" type="button" >HOME</button>
</center>
</html>