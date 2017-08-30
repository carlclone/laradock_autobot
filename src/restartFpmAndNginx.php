<?php


exec('cd ' . $laradockFolder . ' && docker-compose restart php-fpm');
exec('cd ' . $laradockFolder . ' && docker-compose restart nginx');