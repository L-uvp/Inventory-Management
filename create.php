<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Element</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">

<header class="d-flex justify-content-between my-4">
<h1>ADD ITEM</h1>
<div>
    <a href="index.php" class="btn btn-primary">Back</a>
</div>
</header>


<form action="process.php" method="post"> 
<div class="form-element my-4">
    <input type="text" class="form-control" name="element" placeholder="Object Name:">
</div>
<div class="form-element my-4">
    <input type="text" class="form-control" name="price" placeholder="Object price">
</div>
<div>
<input type="text" class="form-control" name="quantity" placeholder="Quantity"> 
</div>
<div class="form-element my-4">
    <select name="type" class="form-control">
        <option value="Out of stock">Out of stock</option>
        <option value="In stock">In stock</option>
        <option value="Order made">Order made</option>
    </select>   
</div>
<div>
    <input type="submit" class="btn btn-success" name="create" value="ADD">
</div>
</form>
</div>
</body>
</html>