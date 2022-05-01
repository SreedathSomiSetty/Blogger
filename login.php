<html>
    <head>
        <title>Login</title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-6 shadow p-5 bg-white rounded border ml-30 mt-5">
            <h4 class="text-primary text-center">Log-in</h4>
            <p><?php if(isset($_GET['msg'])) echo $_GET['msg']; ?></p>
                <form action="db.php" method="post">
                    <div class="form-group">
                      
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="e">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="p">
                    </div>
                    <button type="submit" class="btn btn-success" name="login">Submit</button><br><br>
                    <a href="signup.php">
                        Dont have an account??
                    </a>
                  </form>
            </div>
        </div>

    </body>
</html>