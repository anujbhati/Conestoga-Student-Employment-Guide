<?php
include("config.php");
$email 		= $_POST['email'];
$f = mysqli_query($con,"insert into email( `Email`) values ('$email')");
// $e= "insert into book(Adults, Check-In-Date, Cehck-out-Date, Type Of Room)values('$adults', '$checkin', '$checkout', '$type')";
// $f= mysql_query($e);
if($f)
{
echo "We will get in touch with you soon. Thank you for your patience";
}
else
{
echo "Error";
}
header('Location: thanks.php');
?> 