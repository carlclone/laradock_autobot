<?php
/**
 * Created by PhpStorm.
 * User: a677
 * Date: 28/08/2017
 * Time: 10:36
 */


require('vendor/autoload.php');

use Symfony\Component\Finder\Finder;


$files = Finder::create()
    ->in($nginxFolder)
    ->name('template');
/*    ->contains('{waht}');*/

foreach ($files as $file)
{
    $contents = file_get_contents($file->getRealPath());
    //var_dump($file->getRealPath());
    $updated_domain = str_replace('{DOMAIN_NAME_INPUT}',$domain,$contents);
    $updated_folder = str_replace('{FOLDER_NAME_INPUT}',$folder,$updated_domain);
    file_put_contents($nginxFolder.$domain.'.conf',$updated_folder);
    var_dump('nginx文件创建完成');
}