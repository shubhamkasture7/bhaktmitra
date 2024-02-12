<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $organiser_name=$_POST['organiser_name'];
    $peoples=$_POST['peoples'];
    $organiser_contact=$_POST['organiser_contact'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $address=$_POST['address'];
}

$con=new mysqli('localhost','root','','Form_try');

if($con){
    echo "connection successful";
    $sql="insert into `data`(name,organiser_name,peoples,organiser_contact,dob,email,address) values ('$name','$organiser_name','$peoples','$organiser_contact','$dob','$email','$address')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }

}else{
    die(mysqli_error($con));
}

$con->close();
?>
