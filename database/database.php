<?php
$host = "dpg-cvk2ghmuk2gs73a5gfv0-a";
$port = "5432";
$dbname = "database_sj5u";
$username = "database_sj5u_user";
$password = "EefL6ExPork5PRiqqhKjQ1Qiu4E0cYkq";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password");

if (!$conn) {
    die("❌ Database Connection Failed: " . pg_last_error());
} else {
    echo "✅ Database Connected Successfully!";
}
?>

