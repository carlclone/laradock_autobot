<?php

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class SpeakCommand extends Command
{
    protected function configure()
    {
        $this->setName('build')
            ->setDescription('搭建一个新项目.')
            ->addArgument('domain',InputArgument::REQUIRED,'输入项目名字')
        ->addArgument('folder',InputArgument::REQUIRED,'输入项目文件夹');
        //->addOption(); //php demo speak --voice
    }

    protected function execute(InputInterface $input,OutputInterface $output)
    {
//        exec('say '.$input->getArgument('message'));
        $domain = $input->getArgument('domain');
        $folder = $input->getArgument('folder');
        require('add_host.php');
        require('add_nginx_conf.php');
        require('restart_php_fpm.php');
        $output->writeln('<info>All done.</info>');
    }
}

// chmod +x demo 给demo文件可执行权限