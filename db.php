<?php

$conn=mysqli_connect("localhost","root","","realtime");
session_start();
if(isset($_POST['signup']))
{

    $n = $_POST['n'];
    $m = $_POST['m'];
    $e = $_POST['e'];
    $p = $_POST['p'];
    if(!empty($n) && !empty($m) && !empty($e) && !empty($p))
    {
        $sql="insert into user_details(email, name, mobile, password) values('$e','$n','$m','$p')";
        $result=mysqli_query($conn,$sql);
        if($result==true)
            {
                header("Location:http://localhost/xyz/login.php?msg=You have succesfully signedup. You can login from here");
            }
        else
            {
                echo "something went wrong!";
            }

    }
    else
    {
        header("Location:http://localhost/xyz/signup.php?msg=Some fields are empty!");
    }



}
elseif(isset($_POST['login']))
{


    $e = $_POST['e'];
    $p = $_POST['p'];
    $sql="select * from user_details where email='$e' AND password='$p'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    $uid=$row['uid'];
    $role_id=$row['role'];
    $v=$row['is_verified'];

    $_SESSION['e']=$uid;
    $_SESSION['r']=$role_id;
    if($row>0)
    {
        if($v==1)
        {
            require 'profile.php';
        }
        else
        {
            header("Location:http://localhost/xyz/login.php?msg=Your not Verified Wait for Admin Verification !!");
        }
      
    }
    else
    {
        header("Location:http://localhost/xyz/login.php?msg=Wrong credentials");
    }
    
}
elseif(isset($_GET['edit']))
{
    require 'edit.php';
}

elseif(isset($_GET['update']))
{

    
    $uid=$_SESSION['e'];
    $n = $_POST['n'];
$m = $_POST['m'];
$e = $_POST['e'];
$p = $_POST['p'];
$sql="update user_details set email='$e', name='$n', mobile='$m', password='$p' where uid=$uid";
$result=mysqli_query($conn,$sql);
    require 'profile.php';
}

elseif(isset($_GET['delete']))
{
    $uid=$_SESSION['e'];
    $sql="delete from user_details where uid=$uid";
    require "login.php";
}

elseif(isset($_GET['upload']))
{
    $uid=$_GET['upload'];
    $t="img/".basename($_FILES["pic"]["name"]);
   $sql="update user_details set img='$t' where uid=$uid";
   $result=mysqli_query($conn,$sql);
   move_uploaded_file($_FILES["pic"]["tmp_name"],$t);
   require 'profile.php';
  


  
}

elseif(isset($_GET['profile'])) {
    require 'profile.php';
}

elseif(isset($_GET['logout']))
{
    session_unset();
    session_destroy();
    require 'login.php';
}

elseif(isset($_GET['vu']))
{
    require 'vu.php';
}

elseif(isset($_GET['nvu']))
{
    require 'nvu.php';
}

elseif(isset($_GET['vm']))
{
    require 'vm.php';
}

elseif(isset($_GET['nvm']))
{
    require 'nvm.php';
}

elseif(isset($_GET['home']))
{
    require 'index.php';
}

elseif(isset($_POST['postblog']))
{
    $bh=$_POST['bh'];
    $bc=$_POST['bc'];
    $img="img/".basename($_FILES["bi"]["name"]);
    $bd=$_POST['bd'];
    

    if(!empty($bh) && !empty($bc) && !empty($bd))
    {
        if(empty($row))
        {
            $sql="INSERT into blog(blog_head,blog_category,blog_image,blog_description) values('$bh','$bc','$img','$bd')";
            $result=mysqli_query($conn,$sql);
            move_uploaded_file($_FILES["bi"]["tmp_name"],$img);
            require 'postblog.php';       
        }    
    }
}

elseif(isset($_GET['vb']))
{
    require 'vb.php';
}

elseif(isset($_GET['nvb']))
{
    require 'nvb.php';
}

elseif(isset($_GET['bu']))
{
    $uid=$_SESSION['u'];
    $sql="UPDATE userdetails SET is_verified='0' where uid=$uid";
    $result=mysqli_query($conn,$sql);
    require 'vu.php';
}

elseif(isset($_GET['uedit']))
{
   $uid=($_GET['uedit']);
   require 'useredit.php';
   
}

elseif(isset($_GET['userupdate']))
{   
    $uid=($_GET['userupdate']);
    $n = $_POST['n'];
$m = $_POST['m'];
$e = $_POST['e'];
$p = $_POST['p'];
$sql="update user_details set email='$e', name='$n', mobile='$m', password='$p' where uid=$uid";
$result=mysqli_query($conn,$sql);
    require 'vu.php';
}


elseif(isset($_GET['detail']))
{
   $bid=($_GET['detail']);
   require 'detail.php';
   
}

?>
