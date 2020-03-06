<?php require_once('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shipping details</title>
<link rel="stylesheet" href="shipping.css" type="text/css" />
</head>

<body>

<div id="top">
<a href="front.php"><img src="image/my-cart.png" alt="mycart.com" width="65" height="49" title="MyCart.com"></a>
</div>

<div id="left">
Enter Your Shipping details to serve you better...

<h1>Shipping Address</h1>
<form name="shipping" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Name * <br /><input type="text" size="35" name="name" / required="required"><p>
Address * <br /><input type="text" size="35" name="address"/ required="required"><p>
Landmark <br /><input type="text" size="35" name="landmark"/><p>
Pin * <br /><input type="text" size="35" name="pin" required><p>
Contact No. *<br />
<input type="text" size="35" name="contact" required="required"><p>
<p>
<input type="submit" value="Submit" title="click here" name="submit"/>
<input type="reset" title="click here" href="registered.html" />
<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$pin = $_POST['pin'];
$contact = $_POST['contact'];

$dbc = mysqli_connect('localhost','root','','project')
or die('Error connecting to MySql');
$query="INSERT INTO shipping VALUES ('$name','$address',$landmark','$pin','$contact')";

$result = mysqli_query($dbc,$query)
or die('Error query database');
mysqli_close($dbc);
}
?>

</form>
</div>



<footer>
      &copy; 2013, MyCart.com
      <br>
      All trademarks and registered trademarks appearing on 
      this site are the property of their respective owners.
    </footer>
</body>
</html>
