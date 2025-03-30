<?php
session_start();
include 'database/database.php';

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit();
}

$query = "SELECT * FROM employees";
$result = pg_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Registered Employees</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Department</th>
        </tr>
        <?php while ($row = pg_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['phone']; ?></td>
                <td><?= $row['department']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

