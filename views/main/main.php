<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Main</title>
</head>
<body>
       <header>
       <?php require_once("./assets/html/header.php")?>

       </header>
    
        <div class= "container ustify-content-evenly">
            <a class = "btn btn-outline-danger col-3" href="?controller=FaceToFace&action=getAll">Face to face members</a>
            <a class = "btn btn-outline-danger col-3" href="?controller=RemoteWork&action=getAll">Remote members</a>

        </div>
        
    
<?php require_once("./assets/html/footer.php")?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>