<?php 
include_once("dbconfig.php");
session_start();
if($con)
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $select='SELECT email, username, password FROM register where email='.'"'.$email.'"';
    $result=mysqli_query($con,$select);
    $pass=mysqli_fetch_array($result)['password'];
    if(mysqli_num_rows($result)>0)
    {
        if(strcmp($pass,$password)==0)
        {
            while($ss=mysqli_fetch_array(mysqli_query($con,$select))) 
            {
               $_SESSION['email']=$ss[0];
               $_SESSION['username']=$ss[1];
               break;
            }
             header("location:usermanagement.php");
        }
        else
        {
            header("location:login.html?message=username or password is wrong");
        }
    }
    else
    {
        header("location:register.html?messge=please register your details to access");
    }
}    
else
{
    echo"database connection problem";
}
mysqli_close($con);
?>