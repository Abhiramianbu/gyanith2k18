<?php
try{
    $host='mysql:host=127.0.0.1;port=3306;dbname=gyanith;charset=utf8';
    $username='root';
    $password='';
    $db=new PDO($host,$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{echo 'connected fail'.$e;}
?>