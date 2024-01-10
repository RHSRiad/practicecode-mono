<?php
require("config.php");
$username=$_POST["username"];
$useremail=$_POST["useremail"];
$userpass=md5($_POST["userpass"]);
$code=rand(1000,10000);
//mailer start


use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

   


        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $mail = new PHPMailer(true);                              

        try {

            $mail->isSMTP(); // using SMTP protocol                                     

            $mail->Host = 'ssl://smtp.gmail.com'; // SMTP host as gmail 

            $mail->SMTPAuth = true;  // enable smtp authentication                             

            $mail->Username = 'riad.bme@gmail.com';  // sender gmail host              

            $mail->Password = 'qyxn kszw gobm mxtw'; // sender gmail host password   
            


            $mail->SMTPSecure = 'tls';  // for encrypted connection                           

            $mail->Port = 465;   // port for SMTP     

            $mail->isHTML(true); 

            $mail->setFrom('riad.bme@gmail.com', "Sender"); // sender's email and name

            $mail->addAddress("rhsriad@gmail.com", "Riad hossain");  // receiver's email and name

            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Email verification From Riad';
          
              $mail->Body    = "varification code:". $code; 

            $mail->send();

            echo 'Message has been sent';

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

  





//mailer end


if($conn==true){

    $query="INSERT INTO user(Name,email,password,code)
    VALUE ('$username','$useremail','$userpass','$code')";
    $sql=mysqli_query($conn,$query);

    if($sql){
        header("location: codeverify.php");
    }else{
        header("location: registrationform.php?msg=something wrong try again");
    }

}else{
    echo "sorry";
}