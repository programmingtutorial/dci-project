<?php
include_once("dbconfig.php");
if($con)
{
    $id=$_GET['id'];
    $name=$_GET['nm'];        
    $age=$_GET['age'];    
    $email=$_GET['email'];    
    $mobile=$_GET['mobile'];    
    $gender=$_GET['gender'];    
    $check=$_GET['check'];    
    $date=$_GET['date'];    
    $username=$_GET['username'];    
    $password=$_GET['password'];
    $file=$_GET['photo'];    

    echo '    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register form </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
           .container
            {
                width: 600px;
                margin-top: 10px;
                padding: 20px 30px;
            }
        </style>
    </head>
    <body>
        <div class="container border">
            <center>
                <h2>Registration Form</h2>
            </center>
       
            <form method="post" action="http://localhost/DCI/updateprocess.php" class="needs-validation" novalidate>
    
                <div class="form-group">
                    <label for="id">Id:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required disabled value="'.$id.'">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name" required value="'.$name.'">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
    
                  <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age" required value="'.$age.'">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
    
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required value="'.$email.'">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
    
                  <div class="form-group">
                    <label for="mobilenumber">Mobile Number:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="mobilenumber" required value="'.$mobile.'">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
    
                  <div class="form-group">
                  <h6>Gender:</h6>'; 
                  
                  if(strcmp($gender,"male")==0)
                  {
                    echo'
                    <div class="form-check form-check-inline ">
                      <input type="radio" class="form-check-input" id="male" checked name="gender" value="male">
                      <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline ">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input type="radio" class="form-check-input" id="other" name="gender" value="other">
                    <label class="form-check-label" for="other">Other</label>
                  </div>
                   </div>';
                  }
                  elseif(strcmp($gender,"female")==0)
                  {
                    echo'
                    <div class="form-check form-check-inline ">
                      <input type="radio" class="form-check-input" id="male" name="gender" value="male">
                      <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline ">
                    <input type="radio" class="form-check-input" id="female" name="gender" checked value="female">
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input type="radio" class="form-check-input" id="other" name="gender" value="other">
                    <label class="form-check-label" for="other">Other</label>
                  </div>
                   </div>';
                  }
                  else
                  {
                    echo'
                    <div class="form-check form-check-inline ">
                      <input type="radio" class="form-check-input" id="male" name="gender" value="male">
                      <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline ">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input type="radio" class="form-check-input" id="other" checked name="gender" value="other">
                    <label class="form-check-label" for="other">Other</label>
                  </div>
                   </div>';
                  }
                 
                  if(strcmp($check,"1")==0)
                  {
                echo '<div class="form-group">
                  <h6>Checkbox:</h6>
                  <div class="form-check form-check-inline ">
                        <input type="checkbox" class="form-check-input" checked id="male" name="checkbox" value="1">
                        <label class="form-check-label" for="Male">checkbox1</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input type="checkbox" class="form-check-input" id="female" name="checkbox" value="1,2">
                    <label class="form-check-label" for="Male">checkbox2</label>
                  </div>
                    <div class="form-check form-check-inline ">
                    <input type="checkbox" class="form-check-input" id="other" name="checkbox" value="1,2,3">
                    <label class="form-check-label" for="Male">checkbox3</label>
                    </div>
                    </div>';
                  }
                  elseif(strcmp($check,"1,2")==0)
                  {
                    echo '<div class="form-group">
                    <h6>Checkbox:</h6>
                    <div class="form-check form-check-inline ">
                          <input type="checkbox" class="form-check-input" checked id="male" name="checkbox" value="1">
                          <label class="form-check-label" for="Male">checkbox1</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input type="checkbox" class="form-check-input" checked id="female" name="checkbox" value="1,2">
                      <label class="form-check-label" for="Male">checkbox2</label>
                    </div>
                      <div class="form-check form-check-inline ">
                      <input type="checkbox" class="form-check-input" id="other" name="checkbox" value="1,2,3">
                      <label class="form-check-label" for="Male">checkbox3</label>
                      </div>
                      </div>';
                  }
                  else
                  {
                    echo '<div class="form-group">
                    <h6>Checkbox:</h6>
                    <div class="form-check form-check-inline ">
                          <input type="checkbox" class="form-check-input" checked id="male" name="checkbox" value="1">
                          <label class="form-check-label" for="Male">checkbox1</label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input type="checkbox" class="form-check-input" checked id="female" name="checkbox" value="1,2">
                      <label class="form-check-label" for="Male">checkbox2</label>
                    </div>
                      <div class="form-check form-check-inline ">
                      <input type="checkbox" class="form-check-input" checked id="other" name="checkbox" value="1,2,3">
                      <label class="form-check-label" for="Male">checkbox3</label>
                      </div>
                      </div>';
                  }
    
                    echo '<div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="date" placeholder="select date" name="date" required value="'.$date.'">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
    
                      <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required value="'.$username.'">
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                      </div>
    
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required value="'.$password.'">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
    
                  <div class="form-group">
                  <div class="showpassword">
                    <input type="checkbox" name="show" onclick="showss()" id="show">&nbsp;&nbsp;show password
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="pwd">Upload photo:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" value="'.$file.'" name="file" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                  </div>
    
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">reset</button>
            </form>
        </div>
        <script>
        // Disable form submissions if there are invalid fields
        (function() {
          "use strict";
          window.addEventListener("load", function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener("submit", function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add("was-validated");
              }, false);
            });
          }, false);
        })();
        
        function showss()
        {
          var s=document.getElementById("pwd");
          if(s.type === "password")
          {
            s.type="text";
          }
          else
          {
            s.type="password";
          }
        }
        </script>
    </body>
    </html>';
}
else
{
    die("some problem with database".mysqli_connect_error());
}
?>
