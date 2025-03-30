<?php include 'database/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Employee</title>
</head>
<body>
    <form action="register.php" method="POST">
        <input type="text" name="name" placeholder="Employee Name" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        <input type="text" name="department" placeholder="Department" required><br>
        <button type="submit" name="register">Register</button>
    </form>

    <?php
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];

        $query = "INSERT INTO employees (name, phone, department) VALUES ('$name', '$phone', '$department')";
        $result = pg_query($conn, $query);

        if ($result) {
            echo "✅ Employee Registered Successfully!";
        } else {
            echo "❌ Error: " . pg_last_error($conn);
        }
    }
    ?>
</body>
</html>

