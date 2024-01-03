<?php
include 'connection.php';

$query = mysqli_query($conn ,"SELECT *FROM userregister");






?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
     
<div class="container">
<div class="row">

<div class="col-3">

 

</div>
<div class="col-4">
    <table class="table table-bordred table-danger">
        <h1>user </h1>
        <tr>
            <th>Name</th>
            <th>mobile</th>
            <th>email</th>
          
        </tr>
        <?php
        while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['mobile'];?></td>
            <td><?php echo $data['email'];?></td>
            
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