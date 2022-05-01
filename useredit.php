<?php
include 'adminheader.php';
$sql="select * from user_details where uid='$uid' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$uid=$row['uid'];
$n=$row['name'];
$e=$row['email'];
$p=$row['password'];
$m=$row['mobile'];


?>
    
            <div class="row">
            <div class="col-sm-6 shadow p-5 bg-white rounded border ml-30 mt-5">
            <h4 class="text-primary text-center">Edit Profile</h4>
                <form action="db.php?userupdate=<?php echo $uid ?>" method="post">
                    <div class="form-group">
                    
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="e" value="<?php echo $e ?>">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputname1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="n" value="<?php echo $n ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMobile1">Mobile number</label>
                        <input type="number" class="form-control" id="exampleInputMobile1" name="m" value="<?php echo $m ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="p" value="<?php echo $p ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button><br><br>
                    <a href="login.php">
                        Already have an account!!
                    </a>
                </form>
            </div>
        </div>

    </body>
</html>