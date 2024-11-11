<?php   include ("insert.php");
include ('header.php');
?>

<div class="container shadow-lg ">
<div class="row">
<div class="col-12">
  <div class="main">
<form action="insert.php" method="post" w-50 enctype="multipart/form-data">
<h1 class="text-center text-white">Form Registration </h1>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" ></div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email Address</label>
    <input type="email" class="form-control"  name="email"></div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"  name=" password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" class="form-control"  name="img">
  </div>
  <button type="submit" name=" submit"class="btn btn-primary">Submit</button>
</form> 

</div>
</div>
</div>
</div>


<?php include('footer.php');?>