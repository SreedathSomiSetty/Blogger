<?php
$sql="select * from blog where is_verified=0";
$result=mysqli_query($conn,$sql);
    include 'adminheader.php';
?>
        <div class="container">
            <p class="text-center text-danger"> All recent Blogs </p>
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">blog_id</th>
      <th scope="col">blog_head</th>
      <th scope="col">blog_category</th>
      <th scope="col">blog_image</th>
      <th scope="col">blog_description</th>
    </tr>
  </thead>
  <?php
  foreach($result as $row)
  {
    $bid=$row['blog_id'];
    $bh=$row['blog_head'];
    $bc=$row['blog_category'];
    $bi=$row['blog_image'];
    $bd=$row['blog_description'];
  ?>
  <tbody>
    <tr>
      <td><?php echo $bid;?></td>
      <td><?php echo $bh;?></td>
      <td><?php echo $bc;?></td>
      <td><img src="<?php echo $bi;?>" height="60" width="60"></td>
      <td><?php echo $bd;?></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
    </div>
    </body>
</html>