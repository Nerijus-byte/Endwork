<?php
$dsn = sprintf('mysql:host=%s;dbname=%s', $hostname, $database);

try {
    $dbh = new PDO($dsn, $username, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

echo "\n";