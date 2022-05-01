<html>
    <head>
        <title>Signup</title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-6 shadow p-5 bg-white rounded border ml-30 mt-5">
                <form action="db.php" method="post">
                    <div class="form-group">
                      <h4 class="text-primary text-center">Sign-up</h4>
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="e">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputname1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="n">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMobile1">Mobile number</label>
                        <input type="number" class="form-control" id="exampleInputMobile1" name="m">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="p">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-success" name="signup">Submit</button><br><br>
                    <a href="login.php">
                        Already have an account!!
                    </a>
                </form>
                <p class="text-danger"><?php if(isset($_GET['msg'])) echo $_GET['msg']; ?></p>
            </div>
        </div>

    </body>
</html>