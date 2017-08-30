<?php


$filename = '/etc/hosts';

$fh = fopen($filename, "a");
if (!domainExist($domain)) {
    fwrite($fh, "\n127.0.0.1 " . $domain . ".dev");
    fclose($fh);
    $output->writeln('<info>host条目添加完成</info>');
}

function domainExist($domain)
{
    return strpos(file_get_contents('/etc/hosts'), $domain);
}