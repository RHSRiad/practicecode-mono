<?php

$catagoryname=$_POST['catagoryname'];
$catagorycode=$_POST['catagorycode'];
$catagoryimg=$_POST['catagoryimg'];

$conn=mysqli_connect('localhost',"root","","codemanlearn2");

if($conn==true){

    $query="INSERT INTO category(name,code,image)
    VALUE ('$catagoryname','$catagorycode','$catagoryimg')";
    $sql=mysqli_query($conn,$query);

    if($sql){
        header("location: catagoryform.php?msg=successfully data sent");
    }else{
        header("location: catagoryform.php?msg=sorry somthing wrong");
    }
}else{
    echo "sorry";
}