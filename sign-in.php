<?php require_once('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign In</title>
<link rel="stylesheet" type="text/css" href="sign_in.css" />
</head>

<body>
<div id="top">
<a href="front.html"><img src="image/my-cart.png" alt="mycart.com" width="70" height="53" title="MyCart.com"></a>
</div>
<div id="left">
<form name="input" action="sign_in.php" method="post">
<h2> Sign In Or Create A New Account</h2>
<hr /><p><p>
<p>
<p>
<h3>Enter you Email Address:<p>
Username:* <input type="text" size="30" required name="username"><p>
Enter your password:<p>
Password:* <input type="password" size="30" name="password" required/>
<p>
<input type="submit" value="Sign In" />
<input type="reset" />
</form>
</div>
<div id="rt">
<h2>
Contact Us </h2><p>
Call 08285478931 (24x7 Support)
</div>
<div id="right">
<h2> Need An Account?<p/> Sign Up Here</h2>
<p>
<form name="input" action="sign_up.html" method="get">
<center><input type="submit" value="Sign Up"  /></center></form>
</div>

<footer>
      &copy; 2013, MyCart.com
      <br>
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </footer>
</body>
</html>
