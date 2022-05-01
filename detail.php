
<?php
include 'header.php';
$sql= "select * from blog where blog_id='$bid'";


$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$bid=$row['blog_id'];
$blog_head=$row['blog_head'];
$blog_category=$row['blog_category'];
$blog_description=$row['blog_description'];
$image=$row['blog_image'];
?>
<div class="container">
    <h3 class="text-center text-info">Latest Blog</h3>
    <div class="row">
    
    
     
        <div class="col-sm-4">
            <div class="card">
                <img src="<?php echo $image; ?>" height="100" width="270">
                <div class="card-body">
                    <a  href="#" class="card-title"><?php echo $blog_head?></a>
                    <p class="card-text"><?php echo $blog_description ?></p>
                    <a href="#" class="btn btn-info"><?php echo $blog_category ?></a>
                </div>
            </div>
        </div>   
        
    </div>
  
  
</div>
    </body>
</html>