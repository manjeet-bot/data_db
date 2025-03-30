<?php
include 'database/database.php';

$query = "CREATE TABLE employees (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    department VARCHAR(255) NOT NULL
)";

$result = pg_query($conn, $query);

if ($result) {
    echo "✅ Table 'employees' created successfully!";
} else {
    echo "❌ Error creating table: " . pg_last_error($conn);
}
?>

