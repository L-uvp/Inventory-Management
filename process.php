<?php
include("connect.php");
if (isset($_POST["create"])){
    $element = $_POST["element"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $type = $_POST["type"];    
    
    $sql = "INSERT INTO tory (element,price,quantity,type) VALUES ('$element','$price','$quantity','$type')";

    if(mysqli_query($conn, $sql)){
        echo "Record Inserted";
    }
    else{
        die("Something went wrong");
    }
}

if (isset($_POST["Edit"])){
    $element = $_POST["element"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $type = $_POST["type"];    
    $id = $_POST["id"];
    $sql = "UPDATE tory SET element = '$element', price = '$price', quantity='$quantity',type = '$type' WHERE id = '$id'";
    
    
    if(mysqli_query($conn, $sql)){
        echo "Record Updated";
    }
    else{
        die("Something went wrong");
    }
}
?>