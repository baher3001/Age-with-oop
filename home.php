<?php
 
 session_start();

 if(isset($_SESSION['id']))
 {

 }
 else
 {
     header('location:log.php?error=1');
 }
 


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
     body
        {
            background-color: rgb(255, 201, 71);
        }
        section
        {
            border: 1px solid white;
            width: 300px;
            padding: 60px 40px;
            margin-left: 33vw;
            text-align:center;
            margin-top: 15vh;

        }
        
        .form-control
        {
            width: 200px !important;
        }
    
        @media(max-width:540px;)
        {
            section
            {
                margin-right: 30vw !important;
            }
        }

        .qq
        {
            margin-top:20px;
            margin-left:20px;
        }    

    </style>
</head>
<body>
        <div class="qq">

            <a href="destroy.php" class="btn btn-danger"> log out </a>

        </div>

    <section>
        <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <label for="age"> Age cul: </label>
            </div>
            <div class="col-12 mt-3">
                <input type="number" id="age" class="form-control" placeholder="Enter your Age Here" >
            </div>
            <div class="col-12 mt-3">
                <button class="btn btn-primary" id="button"> Click </button>
                <button class="btn btn-danger " id="clear"> Clear  </button>
            </div>
            <div class="col-12 mt-3">

                <h4 id="result"> result </h4>
            </div>
        </div>
        </div>
    </section>   

    
    
    <script>
        
let Age = document.getElementById('age');
let Button = document.getElementById('button');
let Clear = document.getElementById('clear');
let Result = document.getElementById('result');

Button.onclick = function()
{
    if(Age.value)
    {
        if(Age.value=="e")
        {
            Result.innerHTML="Please Enter your Age";
            Result.style.background="red";
            Result.style.color="white";
        }
        else
        {
            Result.innerHTML = 2020-Age.value + ' ' + 'Years Old';
            Result.style.background="green";
            Result.style.color="white";
        }
    }
    else
    {
        Result.innerHTML="Please Enter your Age";
            Result.style.background="red";
            Result.style.color="white";
    }


}

Clear.onclick = function()
{
     location.reload();
}


    
    </script>
</body>
</html>