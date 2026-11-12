<?php
include "config.php";
if(isset($_POST['update'])){
    $id=$_POST['user_id'];
    $fname = $_POST['name'];
    $lanme = $_POST['lastname'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $employid = $_POST['employid'];
    // $password = $_POST['password'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $update = "UPDATE `user` 
               SET `User_fname` = '$fname',
                   `user_lname` = '$lanme',
                   `user_mobile` = '$number',
                   `user_email` = '$email',
                   `user_employeeId` = '$employid',
                   `user_dob` = '$dob',
                   `user_gender` = '$gender',
                   `user_address` = '$address' 
               WHERE `user_id` = '$id'";

    if(mysqli_query($connect, $update)){
        echo "<script>alert('Data has been updated successfully');window.location.href='users.php';</script>";
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
else{
    echo "Data has not been updated";
}
?>
