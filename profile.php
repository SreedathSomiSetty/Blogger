<?php
$uid=$_SESSION['e'];
$role=$_SESSION['r'];
$sql="select * from user_details where uid='$uid' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$uid=$row['uid'];
$n=$row['name'];
$e=$row['email'];
$p=$row['password'];
$m=$row['mobile'];
$img=$row['img'];

if($role==1)
{
    include 'adminheader.php';
}
else if($role==2)
{
    include 'memberheader.php';
}
else 
{
    include 'userheader.php';
}

?>

        <div class="container">
        <div class="row">
            <div class="col-sm-6 shadow p-5 bg-white rounded border mt-5">
                <h1>Name:<?php echo $n ?></h1>
                <h1>Mobile: <?php echo $m ?></h1>
                <h1>Email: <?php echo $e ?></h1>
                 <a href="db.php?edit" class="btn btn-success" > edit </a>
                 <a href="db.php?delete" class="btn btn-danger" > delete </a>
                 <a href="" class="btn btn-info" > logout </a>
            </div>
            <div class="col-sm-6 shadow p-5 bg-white rounded border mt-5">
                <img src="<?php echo $img;?>" height="100" width="100">
                <form action="db.php?upload=<?php echo $uid; ?>" method="post" enctype="multipart/form-data">
                    <input type="file" name="pic">
                    <input type="submit" value="upload pic" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
    </body>
</html>