<?php
require("config.php");
session_start();
$usermail=$_POST["usermail"];
$userpassword=$_POST["userpassword"];

if($conn==true){
    $query="SELECT * FROM user WHERE email='$usermail' and password='$userpassword' and status='done'";
    $sql=mysqli_query($conn,$query);
    $sql_count=mysqli_num_rows($sql);
    $sql_rows=mysqli_fetch_assoc($sql);

    if($sql_count>0){
        if($sql_rows['email']==$usermail && $sql_rows['password']==$userpassword){

            $_SESSION["username"]=$sql_rows['Name'];
            header("location: dashboard.php");
        }else{
            header("location: login.php?msg=something wrong");
        }
    }else{
        header("location: login.php?msg=something wrong");
    }

}





// if($conn==true){
//     $query="SELECT * FROM user WHERE email='$usermail' and password='$userpassword'";
//     $sql=mysqli_query($conn,$query);
//     $sql_num= mysqli_num_rows($sql);
//     $rows=mysqli_fetch_assoc($sql);

//     if($sql_num>0){
//         if($rows["email"]==$usermail && $rows["password"]==$userpassword){
//             header("location: dashboard.php?msg=successfull");
//         }
//     }else{
//         header("location: login.php?msg=something wrong");
//     }

// }else{
//     header("location: login.php?msg=something wrong");
// }

// if($usermail=="admin@gmail.com" && $userpassword=="12345"){
//     header("location: dashboard.php");
// }else{
//     header("location: login.php?msg=something wrong");
// }
