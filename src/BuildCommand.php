<?php

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BuildCommand extends Command
{
    /**
     * 命令相关配置
     */
    protected function configure()
    {
        $this->setName('build')
            ->setDescription('搭建一个新项目.')
            ->addArgument('domain', InputArgument::REQUIRED, '输入项目名字')
            ->addArgument('folder', InputArgument::REQUIRED, '输入项目文件夹');
    }

    /**
     * 命令执行内容
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //脚本参数
        $laradockFolder = '/Volumes/VirutalMachine/development/laradock/';
        $nginxFolder = $laradockFolder . 'nginx/sites/';
        $domain = $input->getArgument('domain');
        $folder = $input->getArgument('folder');

        //脚本引入
        require('addHost.php');
        require('addNginxConf.php');
        require('addDatabase.php');
        require('restartFpmAndNginx.php');

        $output->writeln('<info>全部完成.</info>');
    }
}