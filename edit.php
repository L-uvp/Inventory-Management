<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Element</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">

<header class="d-flex justify-content-between my-4">
<h1>Edit Item</h1>
<div>
    <a href="index.php" class="btn btn-primary">Back</a>
</div>
</header>
<?php
if(isset($_GET["id"])){
    $id  = $_GET["id"];
    include("connect.php");
    $sql = "SELECT * FROM tory WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    ?>


<form action="process.php" method="post"> 
<div class="form-element my-4">
    <input type="text" class="form-control" value = "<?php $row["element"]; ?>" name="element" placeholder="Object Name:">
</div>
<div class="form-element my-4">
    <input type="text" class="form-control" value = "<?php $row["price"]; ?>" name="price" placeholder="Object Price:">
</div>
<div>
<input type="text" class="form-control" value = "<?php $row["quantity"]; ?>" name="quantity" placeholder="Quantity"> 
</div>
<div class="form-element my-4">
    <select name="type" class="form-control">
        <option value="Out of stock"  <?php if($row['type']=="Out of stock"){echo "selected";} ?>>Out of stock</option>
        <option value="In stock" <?php if($row['type']=="In stock"){echo "selected";} ?>>In stock</option>
        <option value="Order made"  <?php if($row['type']=="Order made"){echo "selected";} ?>>Order made</option>
    </select>   
</div>
<input type="hidden" name="id" value = '<?php echo $row['id']; ?>'>
<div class="form-element">
    <input type="submit" class="btn btn-success" name="Edit" value="ADD">
</div>
</form>
<?php
}
?>
</div>
</body>
</html>