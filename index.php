<?php
/*
use home\kavalar\password\src\PasswordGenerator;
use kavalar\password\src\PasswordGenerator;
*/

use Kavalar\Password\PasswordGenerator;
use Kavalar\Password\CheckBox;

require_once 'vendor/autoload.php';
$CheckBox = new CheckBox();
$submit = new Submit();
$password = new PasswordGenerator();
//var_dump($argv);

$lenght= getopt(null, ["lenght:"]);
$complexity = getopt (null,["complexity:"]);

echo $CheckBox ->createCheckBox();
echo $submit -> createSubmit($lenght, $complexity);
echo $password -> create($lenght, $complexity);
echo "\n";