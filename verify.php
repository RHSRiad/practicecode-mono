<?php
require("config.php"); 
$code=$_POST["code"];

$query="UPDATE user SET status='Done' WHERE code='$code'";
$sql=mysqli_query($conn,$query);

if($sql==true){
    header("location: login.php?msg=verify done");
}
else{
    header("location: codeverify.php?msg=verify done");
}

?>