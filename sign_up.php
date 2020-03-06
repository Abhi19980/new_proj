<?php require_once('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign up</title>
<link rel="stylesheet" href="sign_up.css" type="text/css" />


<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["mname"].value;
var d=document.forms["reg"]["username"].value;
var e=document.forms["reg"]["password"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") )
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }
}
</script>
	



</head>

<body>
<div id="top">
<a href="front.php"><img src="image/my-cart.png" alt="mycart.com" width="65" height="49" title="MyCart.com"></a>
</div>

<div id="left">
Not a member? Register now

<h1>Sign Up here</h1>

 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <legend>Registration Info</legend>
      <label for="fname">First Name:</label>
      <input type="text" id="fname" name="fname" /> <p>
      <label for="lname">Last Name:</label>
      <input type="text" id="lname" name="lname"  /> <p>
	  <label for="mname">Gender:</label>
      <input type="text" name="mname" /><p>
	  <label for="username">UserName:</label>
	  <input type="text" name="username" /><p>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" /><br /> <p>
	  


<input type="checkbox" required> I have read the <a href="#"> Terms & conditions </a> and agree to them
<p>
<a href="#">Forget your password?</a><p>
<input type="submit" value="Register" title="click here" name="submit" />
<input type="reset" title="click here" href="registered.html" />
</form>
</div>
<?php


if (isset($_POST['submit'])) {
    // Grab the profile data from the POST
   session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$username=$_POST['username'];
$password=$_POST['password'];
	
$dbc = mysqli_connect('localhost','root','','project')
or die('Error connecting to MySql');

	if (!empty($username) && !empty($password) ) {
      // Make sure someone isn't already registered using this username
	  
	  
	  
	  
      $query = "SELECT * FROM sign_up WHERE username = '$username'";
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 0) {
        // The username is unique, so insert the data into the database
		
		
		
        $query = "INSERT INTO sign_up (fname, lname, gender, username, password)VALUES('$fname', '$lname', '$mname', '$username', '$password')";
		
        mysqli_query($dbc, $query);

        // Confirm success with the user
		echo '<p>Your new account has been successfully created. You\'re now ready to <a href="sign_in.php">log in</a>.</p>';

       
        mysqli_close($dbc);
        exit();
      }
      else {
        // An account already exists for this username, so display an error message
      
	   echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
  echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';

      }
    }
    else {
     
	 }
  

  mysqli_close($dbc);
}
  ?>
	
	
	
	
	



<div id="right">
<h2>		Facebook User</h2>
<p>
You can use your Facebook account to sign into our site.
<p>
<a href="http://www.fb.com/ryderaka/" title="click here"><img src="image/facebook.png" width="30" height="30">
</a>
</div>

<footer>
      &copy; 2013, MyCart.com
      <br>
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </footer>
</body>
</html>
