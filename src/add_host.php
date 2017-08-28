<?php
/**
 * Created by PhpStorm.
 * User: a677
 * Date: 28/08/2017
 * Time: 10:25
 */


$filename = '/etc/hosts';

$fh = fopen($filename, "a");
if (!domainExist($domain)) {
    fwrite($fh, "\n127.0.0.1 " . $domain . ".dev");
    fclose($fh);
    var_dump('host条目添加完成');
}

function domainExist($domain)
{
    return false;
}