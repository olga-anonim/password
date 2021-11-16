<?php

require_once 'vendor/autoload.php';

if(!empty($_POST)){
    $passwordGen = new \Kavalar\Password\PasswordGenerator();
    echo $passwordGen->create($_POST['length'], $_POST['complexity']);
    //var_dump($_POST);
}
else {
    $config = \Kavalar\Password\config\Config::formConfig();
    include 'src/template/'.$config['template'].'.php';
}