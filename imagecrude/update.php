<?php
include('connect.php');
include('header.php');
 $id=$_GET['id'];
$query="SELECT * FROM image_crude  WHERE id='$id'";
$data=mysqli_query($conn,$query);
$row=mysqli_num_rows($data);
$result=mysqli_fetch_array($data);
?>
<div class="container shadow-lg ">
<div class="row">
<div class="col-12">
  <di class="main">
<form action="" method="post" w-50 enctype="multipart/form-data">
<h1 class="text-center text-white"> Update Form </h1>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $result['name'];?>" ></div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control"  name="email" value="<?php echo $result['email'];?>"></div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
     <td><input type="file" class="form-control"  name="img" value="<?php $result['image'];?>"> <img src='<?php  echo $result['image'];?>' alt="" height="100px" width="100px"></td>
  </div>
  <button type="submit" name="update"class="btn btn-primary">update</button>
   <button><a href="index.php">AddUser</a></button>
</form> 
<?php
include('connect.php');
if(isset($_POST['update'])){
    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $img=$_FILES['img'];
    $img_name=$_FILES['img']['name'];
    $img_tmp=$_FILES['img']['tmp_name'];
    $img_des='image/'.$img_name;
   move_uploaded_file($img_tmp,$img_name);
   $update= "UPDATE image_crude SET name='$username',email='$email',image='$img_des' WHERE id='$id'";
   $data=mysqli_query($conn,$update);
   if($data){
    header('location:display.php');
   }else{
    echo'data not update';
   }

}
?>

</div>
</div>
</div>
</div>
