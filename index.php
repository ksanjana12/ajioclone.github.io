<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <style>

a:link, a:visited{
	background-color: #2f4254;
	color: white;
	
	padding: 15px 25px;
	border-radius: 20px;

	text-align: left;
	text-decoration: none;
	display: inline-block;
}
a:hover, a:active{
background-color:black;}





	.topnav {
	  overflow: hidden;
	  background-color: #333;
	}
	
	.topnav a {
	  float: left;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  border-radius:0px;
	  text-decoration: none;
	  font-size: 13px;
	}
	
	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}
	
	.topnav a.active {
	  background-color: #98AFC7;
	  color: white;
	}
        .button{
    background-color: #5f4254;
    border:none;
    color:white;
    padding:15px 15px;
    text-align:center;
    text-decoration:none;
    display: inline-block;
    font-size:13px;
    margin: 1px 2px;
    cursor: pointer;
    }
    
    
    
    
    * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
    
    
    
    
    
    
	</style>
        
        
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        &nbsp&nbsp&nbsp&nbsp<img src="ajio.png" align="top" height="35" width="95"><hr>
      
	
	<div class="topnav">
	  <a class="active" href="#home">Home</a>
	  <a href="#news">New Arrivals</a>
	  <a href="#contact">Contact</a>
	  <a href="#about">About</a>
	</div>
	
	<div style="padding-left:16px">
	  
	</div>
        <h2><b><marquee> NATION'S FAVOURITE FASHION DESTINATION</marquee></b></h2>
	
</style><p align="left">&nbsp&nbsp&nbsp&nbsp&nbsp
<table><tr><td><a href="https://www.ajio.com/shop/men" target="_blank">MEN</a></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td><a href="https://www.ajio.com/shop/women" target="_blank">WOMEN</a></h5></td>&nbsp&nbsp&nbsp&nbsp
<td><a href="https://www.ajio.com/shop/kids" target="_blank">KIDS</a></td>&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp<td><a href="https://www.ajio.com/shop/indie" target="_blank">ACCESSORIES</a></td>&nbsp&nbsp&nbsp&nbsp&nbsp<td><a href="https://www.ajio.com/c/8312" target="_blank">HOME AND KITCHEN</a></td>
<td>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<p align ="right"><td><label><input name="search" placeholder=" search for products,brands  etc."/></label></td><td><img src="search1.png" align="top" height="20" width="20"></td><td>&nbsp&nbsp<img src="wishlist1.png" align="top" height="20" width="20"></td>
<td>&nbsp<img src="cart.jpg" align="top" height="20" width="20"></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td>

<!<a href="file:///C:/Users/Admin/OneDrive/Desktop/HTML%20prgs/loginpage.html">


&nbsp&nbsp<img src="profile.jpg" align="top" height="20" width="20"></a></td>&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp


<style>

</style>
<td><a href="register.html" target="_blank">LOGIN</a>

     
</td></tr></table>
<hr>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="ss8.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="ss9.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="ss10.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>
    <div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="ss11.png" style="width:100%">
  <div class="text">Caption Four</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>












<a href="https://www.ajio.com/s/50-to-90-percent-off-4904-44091"><img src="Images/ss12.png" align="left" height="500" width="1500"></a><br><center><h1><b>SPECIAL DEALS<b><h1></center>
<a href="https://www.ajio.com/s/min-50-percent-off-4945-62221"><img src="Images/ss2.png" align="left" height="500" width="1500"></a><center><h1><b>WESTERNWEAR CLUB</b></h1><table><tr></center>

<td>&nbsp&nbsp&nbsp
<a href="https://www.ajio.com/s/republic-4916-71871"><img src="ss4.png" align="left" height="480" width="400"></a></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td><a href="https://www.ajio.com/s/rday1950-4575-73471"><img src="ss5.png" align="left" height="480" width="400"></a></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td><a href="https://www.ajio.com/s/best-footwear-4939-72011"><img src="ss6.png" align="left" height="480" width="400"></a></table>
<table></center>
<img src="ss7.png" height="110" width="1500">
<table>
<tr>
    <td><b><i>Ajio</i></b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td><b><i>Help</i></b></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<td><b><i>Shop by<</i>/b></td></tr>
<tr>
<td>Who we are</td><td>Track your order</td><td>Men</td></tr>
<tr>
<td>Join our team</td><td>FAQ's</td><td>Women</td></tr>
<tr>
<td>Terms & conditions</td><td>Return</td><td>Kids</td></tr>
<tr>
<td>We respect your privacy</td><td>Cancellation</td><td>Accessories</td></tr>
<tr>
<td>Fees and payments</td><td>Payments</td><td>New Arrivals</td></tr></table>


</table>


</table>


</table>

</table>

<h4>Do join us on:</h4>
 <h4>
                &nbsp<i><a href="https://instagram.com/ajiolife?igshid=Yzg5MTU1MDY=" target="_blank"><img src="insta.jpg" align="top" height="20" width="20"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="https://www.facebook.com/ajioonlineshopping" target="_blank"><img src="fb2.png" align="top" height="25" width="30"></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href="https://mobile.twitter.com/BestDealsinIND/status/1622556275300245505" target="_blank"><img src="twitter.png" align="top" height="25" width="25"></a></h4>



                   
            </td>
            </tr>
            </table>
</body>
</html>
        
        
        
        
      
    

