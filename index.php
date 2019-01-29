
<?php include_once "connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Person</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="bg-dark">

      <div class="container mt-4">
            <div class="card show-lg">
                 <div class="card-body">
                 <a href="adduser.php"><i class="material-icons"> control_point </i></a>
                <hr>
                
                      <table class="table table-bordered">
                      <!-- <thead> -->
                           <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Age</th>
                              <th>Action</th>
                           </tr>
                           <?php  
                
                                    $query = "SELECT * FROM tbl_person";
                                    $data = mysqli_query($dbconnect, $query);
                                    foreach($data as $row):

                           ?>
                          <tr>
                              <td><?php echo $row['per_id'];?></td>
                              <td><?php echo $row['per_name'];?></td>
                              <td><?php echo $row['per_email'];?></td>
                              <td><?php echo $row['per_age'];?></td>
                              <td>
                                    <a href="edit.php?id=<?php  echo $row['per_id']; ?> "><i class="material-icons" type="edit" name="btn-edit"> edit </a>
                                    <a href="delete.php?id=<?php  echo $row['per_id']; ?>"><i class="material-icons text-danger"> delete </i>  </a>
                  
                              </td>
                          </tr>
                        <!-- </thead> -->
                        <?php endforeach;?>
                      </table>
                     
                 </div>
            </div>
      </div>
    
</body>
</html>