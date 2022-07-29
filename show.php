<?php
include_once("dbconfig.php");
if($con==false)
{
    die("something happened".mysqli_connect_error());
}
else
{
    echo"<!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
        <script src='https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js'></script>
        <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
        <style>
            img
            {
                width:80px;
                height:80px;
            }
            td
            {
                text-align:center;
            }
        </style>
    </head>
    <body>";

        $show='select * from register';
        $result=mysqli_query($con,$show);
        $n=mysqli_num_rows($result);
        if($n==0)
        {
            echo "There is no records";
        }
        else
        {
            echo "<table class='table table-hover'>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>AGE</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>GENDER</th>
                            <th>CHECKBOX</th>
                            <th>DATE</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>PHOTO</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>";
            while($row=mysqli_fetch_array($result))
            {
                $file="https://localhost/DCI/files/".$row[10];

                echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[2]."<td>".$row[3]."<td>".$row[4]."<td>".$row[5]."<td>".$row[6]."<td>".$row[7]."<td>".$row[8]."<td>".$row[9]."<td><img src=".$file.">"."<td>
                <a class='edit' href='update.php?id=$row[0]&nm=$row[1]&age=$row[2]&email=$row[3]&mobile=$row[4]&gender=$row[5]&check=$row[6]&date=$row[7]&username=$row[8]&password=$row[9]&photo=$row[10]' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a><td><a class='delete' href='delete.php?id=$row[0]' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>";
            }
            echo "</table>
            </body>
            </html>";
        }
        mysqli_close($con);
}
?>