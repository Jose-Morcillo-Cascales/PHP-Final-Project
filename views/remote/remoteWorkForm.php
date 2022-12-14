<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
    <title>Remote Work </title>
</head>
<body>
<?php require_once("./assets/html/header.php")?>


        <h1 class= "text-center text-danger">Remote Work Form</h1>

        <?php
        if ($this->action == "getOne" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
            echo "<p>The member does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
        <form class="mb-5 needs-validation" action="?controller=RemoteWork&action=<?php echo isset($this->data['id']) ? "update" : "create" ?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($this->data['id']) ? $this->data['id'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" value="<?php echo isset($this->data['first_name']) ? $this->data['first_name'] : null ?>" class="form-control" id="name" name="first_name" aria-describedby="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input required type="text" value="<?php echo isset($this->data['last_name']) ? $this->data['last_name'] : null ?>" class="form-control" id="last_name" name="last_name" aria-describedby="last_name" placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <label for="birth_date">Birth date</label>
                        <input required type="date" value="<?php echo isset($this->data['birth_date']) ? $this->data['birth_date'] : null ?>" class="form-control" id="birth_date" name="birth_date" aria-describedby="birth_date" placeholder="Enter birth date">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control" id="gender" required>
                            <option value="">Please Select</option>
                            <option value="M" <?php echo isset($this->data['gender']) && $this->data['gender']  == "M" ? 'selected' : null; ?>>Male</option>
                            <option value="F" <?php echo isset($this->data['gender']) && $this->data['gender']  == "F" ? 'selected' : null; ?>>Female</option>
                            <option value="O" <?php echo isset($this->data['gender']) && $this->data['gender']  == "O" ? 'selected' : null; ?>>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone number</label>
                        <input required type="number" value="<?php echo isset($this->data['phone_number']) ? $this->data['phone_number'] : null ?>" class="form-control" id="phone_number" name="phone_number" aria-describedby="phone_number" placeholder="Enter phone number">
                    </div>
                    <div class="form-group">
                        <label for="assembler_role">Role</label>
                        <select name="assembler_role" class="form-control" id="assembler_role" required>
                            <option value="">Please Select</option>
                            <option value="T" <?php echo isset($this->data['assembler_role']) && $this->data['assembler_role']  == "T" ? 'selected' : null; ?>>Teacher</option>
                            <option value="S" <?php echo isset($this->data['assembler_role']) && $this->data['assembler_role']  == "S" ? 'selected' : null; ?>>Student</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="city">city</label>
                        <input required type="text" value="<?php echo isset($this->data['city']) ? $this->data['city'] : null ?>" class="form-control" id="city" name="city" aria-describedby="city" placeholder="Enter city">
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input required type="email" value="<?php echo isset($this->data['email']) ? $this->data['email'] : null ?>" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="street_address">Street Address</label>
                        <input required type="text" value="<?php echo isset($this->data['street_address']) ? $this->data['street_address'] : null ?>" class="form-control" id="street_address" name="street_address" aria-describedby="street_address" placeholder="Enter street">
                    </div>

                    <div class="form-group">
                        <label for="from_date">Start Date</label>
                        <input required type="date" value="<?php echo isset($this->data['from_date']) ? $this->data['from_date'] : null ?>" class="form-control" id="from_date" name="from_date" aria-describedby="from_date" placeholder="Enter start date">
                    </div>

                    <div class="form-group">
                        <label for="to_date">End date</label>
                        <input required type="date" value="<?php echo isset($this->data['to_date']) ? $this->data['to_date'] : null ?>" class="form-control" id="to_date" name="to_date" aria-describedby="to_date" placeholder="Enter end Date">
                    </div>


                    <div class="form-group">
                        <label for="user_password">password</label>
                        <input required type="password" value="<?php echo isset($this->data['user_password']) ? $this->data['user_password'] : null ?>" class="form-control" id="user_password" name="user_password" aria-describedby="user_password" placeholder="Enter password">
                    </div>
                    <div class="row justify-content-between">
                    <button type="submit" class = 'col-2 btn btn-outline-danger'>Submit</button>
                    <a id="return" class="col-2 btn btn-danger" href="<?php echo "?controller=RemoteWork&action=getAll"; ?>">Return</a>
                    </div>
                    
        </form>
    
    <?php require_once("./assets/html/footer.php")?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>