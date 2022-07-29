<?php
include_once("dbconfig.php");
if($con)
{
       $id=$_POST['id'];
        $delete='delete from register where id='.$id.'';
        mysqli_query($con,$delete);
        mysqli_close($con);
        header("location:show.php");
}
else
{
    die("something wrong with database".mysqli_connect_error());
}
?>