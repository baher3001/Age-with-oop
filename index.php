<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
   <style>
       body
        {
            background-color: rgb(255, 201, 71);
        }
        section
        {
            width: 100%;
            position: relative;
            color:white;
        }
        section h1
        {
            position: absolute;
            top: 50;
            left: 40vw;
        }
        small
        {
            color:red;
            display:none;
        }
   
        
        i
        {
            position: absolute;
            top: 65vh;
            right:120;
            color:red;
        }
        .alert
        {
            position: relative;
            bottom: 100vh !important;
            
        }

   </style>
</head>
<body>
    <section>
        <h1 class="text-center "> Sign Up </h1>
        <div class="container h-100 d-flex align-items-center justify-content-center ">
            <form action=""  method="POST" class="w-100">
                <div class="form-group">
                        <label for="name"> Name  </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                        <small> Please Enter your Name here  </small>
                </div>
                <div class="form-group">
                    <label for="age"> Age </label>
                    <input type="number" name="age" class="form-control" placeholder="Enter your Age here">
                    <small> Please Enter your Age here  </small>

                </div>
                <div class="form-group">
                    <label for="email"> Email </label>
                    <input type="email" name="mail"class="form-control" placeholder="Enter your Email here">
                    <small> Please Enter your Email here  </small>

                </div>
                <div class="form-group">
                <label for="password"> Password </label>
                    <input type="password" name="pass" class="form-control" placeholder="Enter your Password" >
                    <small> Please Enter your Password here  </small>
                    <i class="fas fa-eye-slash"></i>
                    <i class="fas fa-eye" style="display:none;"></i>
                </div>
                <div class="form-group">
                    <input type="submit"  name="signup" class="btn btn-primary btn-block">
                </div>

            </form>
        </div>
    </section>





    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        let Inputs = document.querySelectorAll('.form-control');
        let icons = document.querySelectorAll('i');

        icons[0].onclick = function()
        {
            icons[0].style.display="none";
            icons[1].style.display="block";
            Inputs[3].type="text";
        }
        icons[1].onclick = function()
        {
            icons[1].style.display="none";
            icons[0].style.display="block";
            Inputs[3].type="password";
        }

        for(var i=0; i<Inputs.length;i++)
        {
            Inputs[i].onblur = function(e)
            {
                if(e.target.value.length<2)
                {
                    e.target.nextElementSibling.style.display="block";

                }
                else
                {
                    e.target.nextElementSibling.style.display="none";

                }
            }
        }
    
    </script>
</body>
</html>


<?php

if(isset($_POST['signup']))
{
    include('db.php');
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO test(name,age,mail,pass)VALUES('$name','$age','$mail','$pass')";

    if($connection->query($sql))
    {
        echo "</div>
        <div class='alert alert-success' role='alert'>
          Now You can Log in, Please Click on Button  <a href='log.php' class='alert-link'>Log in</a>
        </div>";
    }
    else
    {
        echo"<div class='alert alert-danger' role='alert'>
          Please  Sign up here.
      </div>";
    }

}




?>


