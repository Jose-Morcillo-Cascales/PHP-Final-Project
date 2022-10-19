<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Log in</title>
</head>
<body>
<?php require_once("./assets/html/header.php")?>
   
        <div class = "d-flex justify-content-center align-items-center">
           

            <form action="index.php?controller=Login&action=login" method="post">
                <div class="mb-3 row text-center">
                    <h3 class= "text-danger">Log in</h3>
                </div>
                <div>
                    <div class="mb-3 row d-flex justify-content-center" >
                        <div class="col-sm-10">
                            <input type="text"  class="form-control border border-danger text-danger" name= "user" id="user" placeholder="Enter email" required>
                        </div>
                    </div>
                <div class="mb-3 row d-flex justify-content-center" >
                    <div class="col-sm-10">
                        <input type="password" class="form-control border border-danger text-danger"  id="password" name="password" placeholder="Enter password" required>
                    </div>
                </div>
            <div class="mb-3 row"> 
            <input type="submit" class="btn btn-outline-danger" value ="Log In">
            </div>

            </div>

            </form>

        </div>



    
<?php require_once("./assets/html/footer.php")?>
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

