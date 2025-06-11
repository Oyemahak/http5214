<?php
$mysqli = new mysqli("db", "user", "pass", "testdb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SHOW TABLES");

echo "<h1>Database Tables:</h1><ul>";
if ($result) {
    while ($row = $result->fetch_array()) {
        echo "<li>{$row[0]}</li>";
    }
} else {
    echo "<li>No tables found</li>";
}
echo "</ul>";
?>