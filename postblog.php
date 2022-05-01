<html>
    <head>
        <title>Post Blog</title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-6 shadow p-5 bg-white rounded border ml-30 mt-5">
              <h2 class="text-danger text-center">Post Blog</h2>
                <form action="db.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label for="blogheading" class="col-sm-3 col-form-label">Blog Heading: </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="blogheading" placeholder="Heading" name="bh">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="blogcategory" class="col-sm-3 col-form-label">Blog Category: </label>
                      <div class="col-sm-9">
                        <select id="blogcategory" class="form-control" name="bc">
                          <option selected>Choose...</option>
                          <option>fun</option>
                          <option>sad</option>
                          <option>happy</option>
                          <option>bored</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="blogimage" class="col-sm-3 col-form-label">Blog Image: </label>
                        <div class="col-sm-9">
                          <input class="form-control" type="file" id="formFile" name="bi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blogdescription" class="col-sm-3 col-form-label">Blog Description: </label>
                        <div class="col-sm-9">
                            <textarea  class="form-control" id="blogdescription" placeholder="description" rows="5" name="bd"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-success" name="postblog">Post Blog</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>