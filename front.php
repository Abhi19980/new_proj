<?php require_once('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyCart.com</title>

<link rel="stylesheet" type="text/css" href="front.css" />
</head>

<body>
<div id="top">
<img src="image/my-cart.png" alt="mycart.com" width="58" height="42" title="MyCart.com">
<h4> MYCART.COM </h4>

<div id="search">
<input type="text" size="42" />
</div>
<a href="#">
<div id="search_button">
Search
</div></a>
<a href="#">
<div id="track">
Track your order
</div></a>
<a href="#">
<div id="signup">
<a href="sign_up.php" title="Sign Up">Signup here</a>
</div>



<div id="login">
Login here
<p>
<h1>
<u>
Login </u>
</h1>
</p>
<form method="get" action="shipping.css" name="sign_in" >
Email id: <input type="textfield" size="20" name="email" />
<p>
Password: <input type="password" size="20" name="password" />
<p>
<input type="button" value="Submit" name="submit" /> 
<input type="reset" value="reset" />
</div>

<?php
if(isset($_POST['submit'])) {
$email = $_GET['email'];
$password = $_GET['password'];

$dbc = mysqli_query('localhost','root','','sign_in')
or die ('Error connecting to database');

$query = "INSERT INTO sign_in VALUES ('$email','$password')";

$result = mysqli_query($dbc,$query)
or die ('Error query database');


mysqli_close($dbc);
}
?>
</div>

<nav>
	<ul>
		<li><a href="#mobile">MOBILE</a></li>
		<li><a href="#tablet">TABLETS</a></li>
		<li><a href="">FOOTWEAR</a></li>
		<li><a href="">BOOKS</a></li>
		<li><a href="">BEAUTY</a></li>
	</ul>
</nav>
    <div id="mid"><img src="image/SliderGroup.SliderImage0_1384857487679.jpg" /></div>
    <hr />
    <div id="mobile">
    <h3>
    MOBILES:</h3>
    <HR>
    <div class="img">
  <a target="_blank" href="klematis_big.htm">
  <img src="image/Samsung_GT_I9230CDA_150x150.jpg" alt="Samsung Galaxy Golden" width="110" height="90">
  </a>
  <div class="desc">Samsung Galaxy Golden<br />
  <a href="sign_in.html"> Buy now </a></div>
</div> 

    <div class="img">
  <a target="_blank" href="klematis2_big.htm">
  <img src="image/Samsung_GT_I9500ZWA_150x150.jpg" alt="Galaxy Grand Quattro" width="110" height="90">
  </a>
  <div class="desc">Galaxy Grand Quattro  <br /><a href="sign_in.html"> Buy now </a></div>
  </div>
</div>
<div class="img">
  <a target="_blank" href="Samsung_SM_N9000ZKE_150x150.jpg">
  <img src="image/Samsung_SM_N9000ZKE_150x150.jpg" alt="Galaxy Note III" width="110" height="90">
  </a>
  <div class="desc">Galaxy Note III<br />
  <a href="sign_in.html"> Buy now </a></div></div>
</div>
<div class="img">
  <a target="_blank" href="klematis4_big.htm">
  <img src="image/Samsung_SM_C1010ZWA_150x150.jpg" alt="Galaxy S4 Zoom" width="110" height="90">
  </a>
  <div class="desc">Galaxy S4 Zoom<br>

<a href="sign_in.html"> Buy now </a></div></div></div>
</div>
<p><p><p>
<p>
<p>
<p>
<p>

<div id="next">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr />





<div>
    <h2 id="tablet">
   TABLETS:</h2>
    <HR>
    <div class="img">
  <a target="_blank" href="klematis_big.htm">
  <img src="image/note10.1.jpg" alt="Note10.1" width="110" height="90">
  </a>
  <div class="desc">Galaxy Note 10.1<br>
  <a href="sign_in.php"> Buy now </a></div></div>
</div> 

    <div class="img">
  <a target="_blank" href="klematis2_big.htm">
  <img src="image/Tab 3 211 (7.0) with Bluetooth.jpg" alt="Tab 3 211 (7.0) with Bluetooth.jpg" width="110" height="90">
  </a>
  <div class="desc">Tab 3 211 (7.0) with Bluetooth<br>
  <a href="sign_in.html"> Buy now </a></div></div>
</div>
<div class="img">
  <a target="_blank" href="Samsung_SM_N9000ZKE_150x150.jpg">
  <img src="image/Tab 3 311 (8.0).jpg" alt="Tab 3 311 (8.0)" width="110" height="90">
  </a>
  <div class="desc">Tab 3 311 (8.0)<br>
  <a href="sign_in.html"> Buy now </a></div></div>
</div>
<div class="img">
  <a target="_blank" href="klematis4_big.htm">
  <img src="image/galaxy note 510.jpg" alt="galaxy note 510" width="110" height="90">
  </a>
  <div class="desc">Galaxy note 510<br>
  <a href="sign_in.html"> Buy now </a></div></div>
</div>
</div>

<p>




</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr />

<footer>
      &copy; 2013, MyCart.com
      <br>
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </footer>
</body>
</html>
