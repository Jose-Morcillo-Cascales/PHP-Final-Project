<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Presencial</title>
</head>
<body>
<h1>Presencial Dashboard page!</h1>

    <table class="table">
        <thead>
            <tr>
                <th >ID</th>
                <th>Name</th>
                <th >Type</th>
                <th >Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $faceToFace) {
                echo "<tr>";
                echo "<td >" . $faceToFace["id"] . "</td>";
                echo "<td >" . $faceToFace["first_name"] . "</td>";
                echo "<td >" . $faceToFace["last_name"] . "</td>";
                echo "<td >" . $faceToFace["city"] . "</td>";
                echo "<td >" . $faceToFace["phone_number"] . "</td>";
                echo "<td >" . $faceToFace["assembler_role"] . "</td>";
                echo "<td >
                <a  href='?controller=FaceToFace&action=getOne&id=" . $faceToFace["id"] . "'>Edit</a>
                <a  href='?controller=FaceToFace&action=delete&id=" . $faceToFace["id"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home"  href="?controller=FaceToFace&action=create">Create</a>
    <a id="home"  href="./">Back</a>
</body>
</html>