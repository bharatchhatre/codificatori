<html>
<head>
<title>
</title>

<style type="text/css">
.slideshow { 
height: 200px; width: 290px; margin: auto }


</style>

<style>
#div1{
width:290px;
height:220px;

/*border-left:1px solid #333333;
 background-color:#E6F5FF; */
}

#div2{
width:290px;
height:200px;

/*border-left:1px solid #333333;
/*background-color:#80BCD1;*/
}
#marqueecontainer{
position: relative;
width: 285px; /*marquee width */
height: 180px; /*marquee height */
background-color: white;
overflow: hidden;
padding-left:10px;
font-weight:bold;
font-size:16px;
font-family:Lucida sans;
color:#DF013A;
}
img{

border:"0px";
}

</style>
</head>
<body>
<div id="div1" >
<div class="slideshow">
		<img src="think_foundation_logo_1.gif" width="205" height="63" />
		</div>
</div>

<div id="div2" >

<marquee id="marqueecontainer" behavior="scroll" direction="up" height="200" onmouseout="this.start()" onmouseover="this.stop()"
                                                    scrollamount="2" scrolldelay="30">
<p>
<p style="padding-top:5px"><a href="#" style="color:#DF013A">Donate Now</a>
<p style="padding-top:5px"><a href="#" style="color:#DF013A">Save A Life</a>

</marquee>
</div>

</body>
</html>