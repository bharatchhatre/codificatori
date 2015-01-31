<?php

$usr=$_REQUEST['UserName'];
$paswd=$_REQUEST['Password'];

echo $usr;
echo $paswd;

$con=mysql_connect("localhost","root","");
mysql_select_db("thinkfoundation",$con);
$usrname=mysql_query('SELECT * as log FROM login');

if (!empty($usrname)) {
  if (mysql_num_rows($usrname) > 0) {
  $result1 = mysql_fetch_array($usrname);
  echo "<br><br>";
   echo "Username=".$usrname["log"];
  
 // echo "username=>".$usrname;
  
  }}
  session_start();
  $_SESSION['UserName']=$usr;
  if($usr=='admin')
  {header("location:ngo_available_donor.php");
//echo $usrname;
  }
  else{
  $_SESSION['UserName']=$usr;

  header("location:hosp_demand.php");
  }
mysql_close($con);
?>