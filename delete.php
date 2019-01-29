<!-- ?php
   include_once "connection.php";
   
   $id = $_GET['id'];
   $query = "DELETE FROM tbl_person WHERE per_id = $id";
   $result = mysqli_query($dbconnect, $query);

   if($result){
       header("location:index.php");
   }else{
       echo "Can not Delete";
   }


?> -->

<?php
  include_once "connection.php";
  
  $id = $_GET['id'];
  $query = "DELETE FROM tbl_person WHERE per_id = $id";
  $result = mysqli_query($dbconnect,$query);
      
    if($result){
        header("location:index.php");
    }else{
        echo "Can not delete";
    }  
?>