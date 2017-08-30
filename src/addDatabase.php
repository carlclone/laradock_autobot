<?php


$pdo = new PDO("mysql:host=127.0.0.1;", "root", "root");
$pdo->exec('create database ' . $domain);
$output->writeln('<info>数据库创建完成</info>');