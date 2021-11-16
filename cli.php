<?php

use CliArgs\CliArgs;

require_once 'vendor/autoload.php';

$CliArgs = new CliArgs(\Kavalar\Password\config\Config::cliConfig());

if ($CliArgs->isFlagExist('help', 'h')){
    echo $CliArgs->getHelp('help');
    die();
}

$passwordGen = new \Kavalar\Password\PasswordGenerator();

$complexityArr = [];
for ($i=0; $i<$CliArgs->getArg('c'); $i++){
    $complexityArr[] = $i;
}

echo $passwordGen->create($CliArgs->getArg('ln'), $complexityArr);

echo "\n";