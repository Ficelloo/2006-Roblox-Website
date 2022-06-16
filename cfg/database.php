<?php
    define('HOST', 'localhost');
    define('DB_NAME', 'dbname');
    define('USER', 'dbuser');
    define('PASSWORD', 'dbpassword');
    
    try {
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASSWORD);
    } catch(PDOException $e) {
        echo $e;
    }
?>
