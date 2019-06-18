<?php
$link = mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($link,"CUBA_Database"); 


    $name = $_POST["name"];
    $name1 = $_POST["name1"];
    $relation = $_POST["relation"];
    $mob = $_POST["mob"];
    $email = $_POST["email"];
    $invested = $_POST["invested"];
    $lockable = $_POST["lockable"];
    $unit = $_POST["unit"];
    $commercial = $_POST["commercial"];
    $size = $_POST["size"];
    $ref = $_POST["ref"];
    $date = $_POST["date"];
    $tot = $_POST["tot"];
    $paid = $_POST["paid"];
    $payment = $_POST["payment"];
    $any = $_POST["any"];
    $details = $_POST["details"];
    $agreement = $_POST["agreement"];
    $legal = $_POST["legal"];
    $eow = $_POST["eow"];
    $fir = $_POST["fir"];
    $address =$_POST["address"];
    $per = $_POST["per"];
    $ifw = $_POST["ifw"];
    $ifwe = $_POST["ifwe"];
    $ret = $_POST["ret"];

  $mysqli= "INSERT INTO CUBA (name,name1,relation,mob,email,invested,lockable,unit,commercial,size,ref,date,tot,paid,payment,any,details,agreement,legal,eow,fir,address,per,ifw,ifwe,ret) VALUES ('$name','$name1','$relation','$mob','$email','$invested','$lockable','$unit','$commercial','$size','$ref','$date','$tot','$paid','$payment','$any','$details','$agreement','$legal','$eow','$fir','$address','$per','$ifw','$ifwe','$ret')";

if(!mysqli_query($link,$mysqli))
  die("Sorry your information cannot be matched. Try again later");
  else
    echo "Succesfully submitted.\n Kindly Proceed to Pay";
header("refresh:2;url=i.html");
?>