<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
<style>
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
  background: #2580a2 url('hover.png') bottom center no-repeat;
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
  color: #ffffff;
  text-decoration: none;
}
#cssmenu p {
  clear: left;
}
a{
 color: white;
 
}

</style>
 </HEAD>

<BODY>

<div id='cssmenu' width="">
<ul>
<li class='active'><a href='Login.php'><span>Home</span></a></li>
   <li class='active'><a href='ngo_hop_demand.php'><span>Demand</span></a></li>
   <li class='has-sub'><a href='ngo_available_donor.php'><span>Available</span></a>
      
         <li><a href='ngo_hop_detail.html'><span>Hospital Details</span></a></li>
        
  
         
   
   
   

</ul>
</div>
 </BODY>
</HTML>
