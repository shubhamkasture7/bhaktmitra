<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address=$_POST['address'];
    $contact1 = $_POST['contact1'];
    $contact2 = $_POST['contact2'];
    $oname = $_POST['oname'];
    $ocontect=$_POST['ocontect'];
    $ocontect1=$_POST['ocontect1'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $aadhar = $_POST['aadhar'];
    $disease = $_POST['disease'];
    $image=$_POST['image'];

    $con = new mysqli('localhost', 'root', '', 'form');

    if ($con) {
        $sql = "INSERT INTO `devoti info` (name, address, contact1, contact2, oname, ocontect,ocontect1, gender, age, dob, aadhar, disease, image) VALUES ('$name', '$address',$contact1', '$contact2', '$oname',  '$ocontect','$ocontect1', '$gender', '$age', '$dob', '$aadhar', '$disease','$image')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // Redirect the user to the desired page after successful form submission
            header("Location: http://localhost/BhaktMitra/form/index.php#card");
            exit(); // Ensure that script execution stops after redirection
        } else {
            die(mysqli_error($con));
        }
    } else {
        die(mysqli_error($con));
    }
}

?>
