<html>
<title>Hospital Demand</title>
<head>
<meta charset="UTF-8">
   <meta name="description" content="">
     
    <link rel="style sheet" href="style.css">
     <link rel="shortcut icon" href="happy_r.jpg" />
	<link rel="icon" href="happy_r.jpg" />
    <!-- IE6-8 support of HTML5 elements --> <!--[if lt IE 9]-->
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!--[endif]-->
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  

    

<style>
	 body {
    background-position: center center;
    background-image: url();
    background-repeat: no-repeat;
}
	 </style>  <style>
#cssmenu {
  border: none;
  border: 0px;
  margin: 0px;
  padding: 0px;
  font: 67.5% 'Lucida Sans Unicode', 'Bitstream Vera Sans', 'Trebuchet Unicode MS', 'Lucida Grande', Verdana, Helvetica, sans-serif;
  font-size: 14px;
  font-weight: bold;
  width: auto;
}
#cssmenu ul {
  background: #333333;
  height: 35px;
  list-style: none;
  margin: 0;
  padding: 0;
}
#cssmenu li {
  float: left;
  padding: 0px;
}
#cssmenu li a {
  background: #333333 url('seperator.png') bottom right no-repeat;
  display: block;
  font-weight: normal;
  line-height: 35px;
  margin: 0px;
  padding: 0px 25px;
  text-align: center;
  text-decoration: none;
}
#cssmenu > ul > li > a {
  color: #cccccc;
}
#cssmenu ul ul a {
  color: #cccccc;
}
#cssmenu li > a:hover,
#cssmenu ul li:hover > a {
  background: #600000 url('hover.png') bottom center no-repeat;
  color: #FFFFFF;
  text-decoration: none;
}
#cssmenu li ul {
  background: #333333;
  display: none;
  height: auto;
  padding: 0px;
  margin: 0px;
  border: 0px;
  position: absolute;
  width: 225px;
  z-index: 200;
  /*top:1em;
	/*left:0;*/

}
#cssmenu li:hover ul {
  display: block;
}
#cssmenu li li {
  background: url('sub_sep.png') bottom left no-repeat;
  display: block;
  float: none;
  margin: 0px;
  padding: 0px;
  width: 225px;
}
#cssmenu li:hover li a {
  background: none;
}
#cssmenu li ul a {
  display: block;
  height: 35px;
  font-size: 12px;
  font-style: normal;
  margin: 0px;
  padding: 0px 10px 0px 15px;
  text-align: left;
}
#cssmenu li ul a:hover,
#cssmenu li ul li:hover > a {
  background: #2580a2 url('hover_sub.png') center left no-repeat;
  border: 0px;
  color: #600000;
  text-decoration: none;
}
#cssmenu p {
  clear: left;
}

</style>
<style>
#footer{
font-family:sans-serif;
font-size:11px;
padding:10px;
background-color:#333333;
color:white;
}
a{
color:white;

}
</style>

<body bgcolor="white">

<div id='cssmenu' width="1000px">
<form action="ngo_hop_demand.php" method="POST">

<div style="width:100%; height:350px; margin:0 auto 0 auto;">

<div id="banner" name="banner"  width="397px"><span id="time" align="right" style="display: block;" name="time"><?php date_default_timezone_set("Asia/Kolkata"); 
echo date('l F j, g:i a')?> &nbsp;  <a id="login_link"  href="<?php echo $url; ?>"><?php echo $log ?></a></span>
  
<img width="250px" height="63px" src="think_foundation_logo_1.gif" />
    <img width="397px" height ="63px" src="topimg_1.jpg" />
    </div> 

<nav id="nav">
    <ul id="navigation">
       <li><a href="Index.php">HOME</a></li>
        
        
</ul>

</nav>  
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>NGO HOSPITAL DEMAND</b>
<br><br><br><br>
 
<tr>
Hospital Id:<label for="hosp_id">  </label><br><br><br>
Demand:<label for="demand">  </label><br><br><br>
Blood Group:<label for="blood_grp">  </label><br><br><br>
<br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</td>
</tr>

</div>
</form>
</head>
</body>
</html>
 