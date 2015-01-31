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
  
  <script>
  $(document).ready(function() 
{
    $("#datepicker").datepicker();
$("#datepicker1").datepicker();
  });

  </script>
    

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
<form action="hop_demand.php" method="POST">
<div style="width:850px; height:350px; margin:0 auto 0 auto;">
<!--<img src="topimage.jpg" width="100%"  height="55%" />-->
<marquee bgcolor="black" style="8" behavior="alternate"><font color="#600000" size="5"><H6 style="font-family:Lucida Calligraphy;">Welcome to the Think Foundation!!</font></marquee>


<nav id="nav">
    <ul id="navigation">
       <li><a href="dropdown1.html">HOME</a></li>
        
        
</ul>

</nav>  
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>HOSPITAL DEMAND</b>
<br><br><br><br>
 <table border=2 width="50%" align="center" height="60%" id="table1" name="table1" >
<tr>
Number of Donors Required:<input type="text" name="txtnum" size="2" maxlength="2"><br><br><br>
Blood Groups:<select name="blood_grps">
<option>	</option> 
<option>A+</option>
<option>B+</option>
<option>AB+</option> 
<option>O+</option>
<option>A-</option>
<option>B-</option> 
<option>AB-</option>
<option>O-</option>         
</select><br><br><br><br><br><br><br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</td>
</tr>
</table>
</div>
</form>
</head>
</body>
</html>
 