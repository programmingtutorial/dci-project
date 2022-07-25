<?php
$conn=mysqli_connect("localhost","root","","dci");
if($conn==false)
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
    <body>
    <form action='https://localhost/DCI/show.php' method='post'>
        <div class='col-md-12 text-center'>
        <button name='btn' class='btn btn-success btn-sm'>show database</button>
        </div>
        </form>";
    if(isset($_POST['btn']))
    {
        $show='select * from register';
        $result=mysqli_query($conn,$show);
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
                        </tr>";
            while($row=mysqli_fetch_array($result))
            {
                $file="https://localhost/DCI/files/".$row[10];

                echo "<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[2]."<td>".$row[3]."<td>".$row[4]."<td>".$row[5]."<td>".$row[6]."<td>".$row[7]."<td>".$row[8]."<td>".$row[9]."<td><img src=".$file.">"."<td><a href='#' class='btn btn-info btn-lg'>&#x270f;</a>";
            }
            echo "</table>
            </body>
            </html>";
        }
        mysqli_close($conn);
    }
}
?>