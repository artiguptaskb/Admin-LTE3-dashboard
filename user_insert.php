<?php
include "config.php";
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lanme=$_POST['lname'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $employid=$_POST['employid'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $query="INSERT INTO `user`(`user_id`, `User_fname`, `user_lname`, `user_email`, `user_mobile`, `user_employeeId`, `user_password`, `user_dob`, `user_gender`, `user_address`) VALUES (NULL,'$fname','$lanme','$email','$number','$employid','$password','$dob','$gender','$address')";
    mysqli_query($connect,$query);
    
    echo "<script>alert('data has been insert successfully');</script>";
}
else{
    echo "<script>alert('data is not insert succesfully');</script>";
}
header("location:add_user_form.php");
?>