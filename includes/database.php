<?php 
    define('HOST', 'localhost:3306');
    define('DB_NAME', 'ptb-hellbdd');
    define('USERS1', 'root');
    define('PASS', '');

try{
    $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USERS1, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo $e;
}

?>