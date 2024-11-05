<?php  
    define("DB_NAME", 'smweb');
    define("DB_USER", 'root');
    define("DB_PASSWORD", '');
    define("DB_HOST", 'localhost');
    define("DB_PORT", '3306');
    define("SYS_URL", 'http://script.test:81/'); // Change backslash to forward slash
    define("DEBUGGING", false);
    define("DEFAULT_LOCALE", 'en_us');
    define("LICENCE_KEY", '6vlCWAZs3-4CI4m-21Bqb-3s1lh-3HPKJ-6f96128fb6e4');
    define("JWT_SECRET", 'd030b8d911f1a4b38fd96d95533ce319');

    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit; // Stop execution on connection error
    }
?>
