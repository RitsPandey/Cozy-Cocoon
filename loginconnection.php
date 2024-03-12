<?php include('connection.php'); ?>
<?php
$femail   = $_POST['email'];
$fpass    = $_POST['password'];
$query = $conn->prepare("select * from register where email = ?");
$query->bind_param("s",$femail);
$query->execute();
$query_result = $query->get_result();
if($query_result->num_rows > 0){
    $data = $query_result->fetch_assoc();
}
    if($data["password"] == "$fpass"){
        echo include("index.php");
}else{
    echo "invalid email or password";
}
?>

