<?php
$dsn = 'mysql:host=34.68.9.84:3306;dbname=vinhasvinho';
$user = 'vinhodh';
$pass = 'stk456RFS#';

try{
    $conn = new PDO ($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "<h2>Problemas para efetuar a conexao</h2><br>" . $e->getMessage();
}
