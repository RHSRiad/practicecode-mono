<?php

$productid=$_POST["productid"];
$productname=$_POST["productname"];
$productbuyprice=$_POST["productbuyprice"];
$productsellprice=$_POST["productsellprice"];
$description=$_POST["description"];

$conn=mysqli_connect("localhost","root","","codemanlearn2");

if($conn==true){

    $query="INSERT INTO roduct(productid,productname,buyprice,sellprice,description)
    VALUE ('$productid','$productname','$productbuyprice','$productsellprice','$description')";

    $sql=mysqli_query($conn,$query);

    if($sql){
        header("location: productform.php?msg=successfully data sent");
    }else{
        header("location: productform.php?msg=something wrong");
    }

}else{
    echo "sorry something wrong";
}