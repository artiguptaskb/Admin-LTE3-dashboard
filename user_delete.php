 <?php

// include "config.php";


include "config.php";

if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    
    // Prepare the SQL delete query
    $sql = "DELETE FROM `user` WHERE `user_id` = '$id'";
    
    if (mysqli_query($connect, $sql)) {
        echo json_encode(array("status" => "success"));
    } else {
        echo json_encode(array("status" => "error"));
    }
    exit();
}
?>


<!-- // $id=$_GET['user_id'];
// $delete="DELETE FROM `user` WHERE `user_id`='$id'";
// mysqli_query($connect,$delete);
// echo "<script>alert('data has been deleted successfully');window.location.href='users.php';</script>"; -->
?>

