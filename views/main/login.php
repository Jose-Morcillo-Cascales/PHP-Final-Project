<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
        <form action="index.php?controller=Login&action=login" method="post">
            <label for="user">Email Address</label>
            <input type="email" name= "user" id="user" required>
            <label for="password">Password</label>         
            <input type="password" name="password" id="password" required>
            <input type="submit" value ="Log In">
        </form>
</html>