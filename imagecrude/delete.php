<?php
include("connect.php");
$id =$_GET['id'];
$query="DELETE   FROM image_crude  WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){
    header("location:display.php");
}else{
    echo "data not deleted";
}


?>