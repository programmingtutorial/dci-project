<?php 
include_once("dbconfig.php");
if($con)
{
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['mobilenumber'];
$gender=$_POST['gender'];
$checkbox=$_POST['checkbox'];
$date=$_POST['date'];
$username=$_POST['username'];
$password=$_POST['password'];

if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    
$path='C:/xampp/htdocs/DCI/files/';
$file=$_FILES["file"]["name"];
$temp=$_FILES['file']['tmp_name'];
move_uploaded_file($temp,$path.$file);

$insert="insert into register(name,age,email,phone,gender,checkbox,date,username,password,photo) values('$name','$age','$email','$phone','$gender','$checkbox','$date','$username','$password','$file')";
mysqli_query($con,$insert);
mysqli_close($con);
header("location:login.html");
}
}
else
{
    die('something happened'.mysqli_connect_error());
}

?>