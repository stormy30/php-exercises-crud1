<?php
<<<<<<< HEAD

$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'colyseum';
try{
    $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $DB_con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch(PDOException $e){
    echo $e->getMessage();
}
=======
/**
 * Created by PhpStorm.
 * User: coda
 * Date: 04/07/17
 * Time: 09:23
 */
>>>>>>> b2283309fa0713ff8c91607f7b4098bf8a2330d5
