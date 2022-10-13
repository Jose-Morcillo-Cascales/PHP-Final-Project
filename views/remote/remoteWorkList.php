<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote List</title>
</head>
<body>
<h1>Remote Dashboard page!</h1>

<table class="table">
    <thead>
        <tr>
            <th >ID</th>
            <th>Name</th>
            <th >Last Name</th>
            <th >Action</th>
            <th >City</th>
            <th>Phone Number</th>
            <th >Role</th>
            <th >Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($this->data as $index => $remote) {
            echo "<tr>";
            echo "<td >" . $remote["id"] . "</td>";
            echo "<td >" . $remote["first_name"] . "</td>";
            echo "<td >" . $remote["last_name"] . "</td>";
            echo "<td >" . $remote["city"] . "</td>";
            echo "<td >" . $remote["phone_number"] . "</td>";
            echo "<td >" . $remote["assembler_role"] . "</td>";
            echo "<td >
            <a  href='?controller=RemoteWork&action=getOne&id=" . $remote["id"] . "'>Edit</a>
            <a  href='?controller=RemoteWork&action=delete&id=" . $remote["id"] . "'>Delete</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
<a id="home"  href="?controller=RemoteWork&action=create">Create</a>
<a id="home"  href="./">Back</a>
</body>
</html>