<?php
include('connect.php');
include('header.php');
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include('connect.php');
    $query="SELECT * FROM image_crude";
    $data=mysqli_query($conn,$query);
    $result=mysqli_num_rows($data);
    if($result){
while($row=mysqli_fetch_array($data)){
?>
<tr>
  <td><?php echo $row['id'];?></td>
  <td><?php echo $row['name'];?></td>
  <td><?php  echo$row['email'];?></td>
  <td><img src='<?php  echo $row['image'];?>' alt="" height="100px" width="100px"></td>
 <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a></td>
 <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
</tr>
<?php
}
    }
   
    ?>
  </tbody>
</table>