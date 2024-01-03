<?php
include '../seller/connection.php';
session_start();

$query = mysqli_query($conn, "SELECT *FROM  addcart");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-4">

        
    <table class="table table-bordered table-danger">
        <h1 align="center">SELLER CART</h1>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Image</th>
            <th colspan="2">ACTION</th>
        </tr>
        <?php
     
            while($data = mysqli_fetch_assoc($query)){
        
        
            ?>


        <tr>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['price'];?></td>
            <td><?php echo $data['qty'];?></td>
            <td><img src="./seller/images/ <?php echo $data['image'];?>" height="100px" width="100px"></td>
            <td><a href="edit.php?id=<?php echo $data['id'];?>"   class="btn btn-success">edit</a></td>
            <td><a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-warning">delete</a></td>
            
        </tr>

            <?php
        }
    
        ?>
    </table>
        </div>
    </div>
    </div>
    
</body>
</html>