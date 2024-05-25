<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style_1.css">
</head>
<body>
    <nav>    
    <ul>
    <li><a href="index.php">Home</a></li>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
    </ul>
    </nav>
    <div class="container">
    <header class="d-flex justify-content-between my-4">
    <h1>Inventory</h1>
    <div>
    <a href="create.php" class="btn btn-primary">Add Element</a>
    </div>
    </header>
    </div>


    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>#</th>
                <th>Element</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Stock</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql = "SELECT * FROM tory";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row["id"];  ?> </td>
                        <td><?php echo $row["element"];  ?> </td>
                        <td><?php echo $row["price"];  ?> </td>
                        <td><?php echo $row["quantity"];  ?> </td>
                        <td><?php echo $row["type"];  ?> </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>