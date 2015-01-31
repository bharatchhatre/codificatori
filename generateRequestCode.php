<?php

$DonorID=$_REQUEST['DonorID'];
$BloodGroup=$_REQUEST['BloodGroup'];
$Pincode=$_REQUEST['Pincode'];
$a = mt_rand(1000000000,9999999999); 

	
$con=mysql_connect("localhost","root","");
mysql_select_db("thinkfoundation",$con);

$usrname=mysql_query("INSERT INTO requestcode values('$a',101,$DonorID,0,'".SYSDATE()."'");



?>