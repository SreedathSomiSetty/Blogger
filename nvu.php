<?php
$sql="select * from user_details where role='3' && is_verified='0' ";
$result=mysqli_query($conn,$sql);
    include 'adminheader.php';
?>
        <div class="container">
            <p class="text-center text-danger"> All Non-Verified Users </p>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">UID</th>
      <th scope="col">User Image</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
  foreach($result as $row)
  {
    $uid=$row['uid'];
    $n=$row['name'];
    $e=$row['email'];
    $p=$row['password'];
    $m=$row['mobile'];
    $img=$row['img'];

  

  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $uid;?></th>
      <td><img src="<?php echo $img;?>" height="60" width="60"></td>
      <td><?php echo $n;?></td>
      <td><?php echo $m;?></td>
      <td><?php echo $e;?></td>
      <td>
          <a href="#" class= "btn btn-primary">Edit</a>
          <a href="#" class= "btn btn-danger">Delete</a>
          <a href="#" class= "btn btn-success">Verify</a>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
    </div>
    </body>
</html>