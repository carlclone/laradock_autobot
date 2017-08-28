<?php
/**
 * Created by PhpStorm.
 * User: a677
 * Date: 28/08/2017
 * Time: 10:54
 */

exec('cd '.$laradockFolder.' && docker-compose restart php-fpm');
exec('cd '.$laradockFolder.' && docker-compose restart nginx');