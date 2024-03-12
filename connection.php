
<?php
error_reporting(0);
$servername = "localhost";
$username   = "root";
$passwor    = "";
$dbname     = "cozycocoon";

$conn = mysqli_connect($servername,$username,$passwor,$dbname);

if($conn)
{
   // echo "connection ok";
}
else{
    echo "connection failde".mysqli_connect_error();
}
?>
