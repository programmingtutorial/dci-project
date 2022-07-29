<?php
include_once("dbconfig.php");
if($con)
{

$id=$_GET['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['mobilenumber'];
$gender=$_POST['gender'];
$checkbox=$_POST['checkbox'];
$date=$_POST['date'];
$username=$_POST['username'];
$password=$_POST['password'];
$file=$_GET['photo'];


      if(!empty($_FILES['file']))
      {
        $path='C:/xampp/htdocs/DCI/files/';
        $file=$_FILES["file"]["name"];
        $temp=$_FILES['file']['tmp_name'];
        move_uploaded_file($temp,$path.$file);
      }
  
      //$updatequery='update register set name='.$_POST['name'].',age='.$_POST['age'].' email='.$_POST['email'].',phone='.$_POST['mobilenumber'].',gender='.$_POST['gender'].',checkbox='.$_POST['checkbox'].',date='.$_POST['date'].',username='.$_POST['username'].',password='.$_POST['password'].',photo='.$file.' where id='.$id.'';
  
      $updatequery="update register set name='$name',age='$age',email='$email',phone='$phone',gender='$gender',checkbox='$checkbox',date='$date',username='$username',password='$password',photo='$file' where id='$id'";


      mysqli_query($con,$updatequery);
      mysqli_close($con);
  
     header("location:show.php");
  
}
else
{
  die("something went wrong with database".mysqli_connect_error());
}
?>