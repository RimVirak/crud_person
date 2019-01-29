<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person Crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

<body class="bg-dark">
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card show-lg">
                    <div class="card-body">
                        <a href="index.php"><i class="material-icons"> arrow_back </i></a>
                        <hr>
                       <?php
                       include_once "connection.php";

                       $id = $_GET['id'];
                       $query = "SELECT * FROM tbl_person WHERE per_id = ".$id;
                       $datas = mysqli_query( $dbconnect, $query);

                       foreach($datas as $data):
                       
                       ?>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required value="<?php echo $data['per_name'];?>">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo $data['per_email'];?>">
                            </div>
                            <div class="form-group">
                                <input type="age" name="age" class="form-control" placeholder="Age" required value="<?php echo $data['per_age'];?>">
                            </div>
                            <div class="form-group">
                               <button class="btn btn-primary btn-block" name="btn-edit" type="Edit">Edit now</button>
                            </div>
                        </form>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

</body>

</html>

<?php

include_once "connection.php";

    if(isset($_POST['btn-edit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $query = " UPDATE tbl_person SET per_name='$name', per_email='$email', per_age='$age' WHERE per_id =" .$id;
        $result = mysqli_query( $dbconnect, $query);

        if($result){
            header("location:index.php");
        }else{
            header("location:adduser.php");
        }

    }

?>

