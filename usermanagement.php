<?php
include_once("dbconfig.php");
session_start();
if(!empty($_SESSION['email']) && !empty($_SESSION['username']))
{
    $query='select email,username,photo from register where email='.'"'.$_SESSION['email'].'"';
    $result=mysqli_query($con,$query);
    $email=mysqli_fetch_array($result)['email'];
    $file="https://localhost/DCI/files/".$photo=mysqli_fetch_array(mysqli_query($con,$query))['photo'];
    echo '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UserManagement</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            .container
            {
                width: 400px;
                height: 85px;
                font-size: 15px;
                text-align: center;
                margin-left: 70%;
                margin-top: 5px;
                border-radius: 20px;
            }
            button,p
            {
                margin-top: 25px;
            }
            .sidebar 
            {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
                width: 240px;
            }
            .frame
            {
                width: 1095px;
                height: 550px;
                margin-left: 250px;
                margin-top: 1%;
            }
            iframe
            {
                height: 530px;
                width: 100%;
            }
            img
            {
                object-fit : cover;
                border-radius: 10px;
                margin-top :15px;
            }
        </style>
    </head>
    <body>
        <form action="http://localhost/DCI/logout.php" method="post">
            <div class="container border">
                <div class="row">
                    <div class="form-group">
                        <div class="col">
                            <img src='.$file.' width="50" height="50" alt="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <p>'.$email.'</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col">
                            <button type="submit" class="btn btn-info btn-sm">logout</button>
                        </div>
                    </div>
                 </div>   
            </div>
        </form>
        
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
              <div class="list-group list-group-flush mx-3 mt-4">
                <p class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
                  <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Management</span>
                </p>
                <a href="http://localhost/DCI/show.php" target="show" class="list-group-item list-group-item-action py-2 ripple">
                  <i class="fas fa-chart-area fa-fw me-3"></i><span>Users Management</span>
                </a>
              </div>
            </div>
          </nav>
          <div class="frame">
            <iframe src="" width="1090" name="show" frameborder="1"></iframe>
          </div>
    </body>
    </html>';
}
else
{
    header("location:login.html");
}
mysqli_close($con);
?>