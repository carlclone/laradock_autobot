<?php
/**
 * Created by PhpStorm.
 * User: a677
 * Date: 28/08/2017
 * Time: 10:30
 */

/*exec('cd '.$laradockFolder.' && docker-compose exec mysql bash');
exec('mysql -uroot -proot');
exec('create database '.$domain.';');*/
//$pdo -> query("select * from test");

$pdo = new PDO("mysql:host=127.0.0.1;","root","root");
$pdo->exec('create database '.$domain);
var_dump('数据库创建完成');