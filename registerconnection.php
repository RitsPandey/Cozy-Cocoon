
<?php include('connection.php'); ?>
<?php
   if($_POST['register'])
   {
    $femail   = $_POST['email'];
    $fpass    = $_POST['password'];
    $frepeatpass = $_POST['repeatpass'];
     
    $query = "INSERT INTO register values('$femail','$fpass','$frepeatpass')";
    $data = mysqli_query($conn, $query);

     if($data)
     {
      echo include("login.php");
     }
     else{
      echo "failed";
     }
   }
?>
