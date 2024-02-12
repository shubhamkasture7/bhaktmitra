<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    // $address=$_POST['address'];
    $contact1=$_POST['contact1'];
    $contact2=$_POST['contact2'];
    $oname=$_POST['oname'];
    // $ocontect=$_POST['ocontect'];
    // $ocontect1=$_POST['ocontect1'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $aadhar=$_POST['aadhar'];
    $disease=$_POST['disease'];
    // $image=$_POST['image'];
}

$con=new mysqli('localhost','root','','form');



if($con){
  
    $sql="insert into `devoti info`(name,contact1,contact2,oname,gender,age,dob,aadhar,disease) values ('$name','$contact1','$contact2','$oname','$gender','$age','$dob','$aadhar','$disease')";
    $result=mysqli_query($con,$sql);
    // if($result){
    //     echo "click on Go back to get your id card on clicking preview";
    // ---------------------------------------------------------------------------------------------------------
        // // example.com/your-script.php?link= 'https://www.google.com'
        // if(isset($_GET['link'])) {
        //     $link = $_GET['link'];
        //     echo "<script>window.location.href = '$link';</script>";
        // } else {
        //     $googleLink = "http://localhost/Bhakt%20Mitra/form/index.php#card"; // Change this to the desired link
        //     echo "<a href='$googleLink'><button>Click Me!</button></a>";
        // }
        // ----------------------------------------------------------------------------------------------------------
    //     echo '<!DOCTYPE html>
    //     <html>
    //     <head>
    //         <title>Back Button</title>
    //     </head>
    //     <body>
        
    //     <!-- Create a button to go back to the previous page -->
    //     <button onclick="goBack()"> Go Back </button>
    //     <style>
    //     button {
    //         scale: 1.5;
    //         text-decoration: none;
    //         top: 10vh;
    //         left: 35vw;
    //     }
    //     </style>
        
    //     <script>
    //         function goBack() {
    //             window.history.back();
    //         }
    //     </script>
        
    //     </body>
    //     </html>';
        
    // -------------------------------------------------------------------------------------------------------------------------
    // }else{
    //     die(mysqli_error($con));
    // }

}else{
    die(mysqli_error($con));
}


?>