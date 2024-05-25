<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM tory WHERE id = $id";
    if(mysqli_query($conn,$sql)){
        echo "Deleted";
    }
    else{
        die("Something went wrong");
    }
}
?>