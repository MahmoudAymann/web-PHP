<?php

$conn = mysqli_connect("localhost","root","","hamada");

if($conn)
{
echo"con correct";
}
if(!$conn)
 {
   die("Connection error: " . mysqli_connect_error());
 }

?>
