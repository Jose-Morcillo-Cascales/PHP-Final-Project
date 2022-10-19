<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
    <title>Remote List</title>
</head>
<body>
<?php require_once("./assets/html/header.php")?>
<container >

<h1 class= "text-center text-danger">Remote Members</h1>

<table class="table">
    <thead>
        <tr class="table-danger text-danger" >
            <th >ID</th>
            <th>Name</th>
            <th >Last Name</th>
            <th >City</th>
            <th>Phone Number</th>
            <th >Role</th>
            <th >Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->data as $index => $remote) {
            echo "<tr class='table-danger'>";
            echo "<td >" . $remote["id"] . "</td>";
            echo "<td >" . $remote["first_name"] . "</td>";
            echo "<td >" . $remote["last_name"] . "</td>";
            echo "<td >" . $remote["city"] . "</td>";
            echo "<td >" . $remote["phone_number"] . "</td>";
            echo "<td >" . $remote["assembler_role"] . "</td>";
            echo "<td >
            <a  href='?controller=RemoteWork&action=getOne&id=" . $remote["id"] . "'class ='btn btn-outline-danger'>Edit</a>
            <a  href='?controller=RemoteWork&action=delete&id=" . $remote["id"] . "'class ='btn btn-outline-danger'>Delete</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<div class = "row justify-content-center">
<a  class ="btn btn-outline-danger col-2" href="?controller=RemoteWork&action=create">Create</a>
<a   class ="btn btn-outline-danger col-2" href="./">Back</a>
</div>
</container>  

<?php require_once("./assets/html/footer.php")?>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>