<?php
include('connect.php');
if (isset($_POST['submit'])) {
  $username = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $img = $_FILES['img'];
  $img_name = $_FILES['img']['name'];
  $img_tmp = $_FILES['img']['tmp_name'];
  $img_des = 'image/' . $img_name;
  move_uploaded_file($img_tmp, $img_name);
  $query = "INSERT INTO image_crude (name,email,password,image) VALUES ('$username','$email','$password','$img_des')";
  $data = mysqli_query($conn, $query);
  if ($data) {
    header('location:display.php');
  } else {
    echo "data not inserted in the database";
  }
}
