<?php
/*
use home\kavalar\password\src\PasswordGenerator;
use kavalar\password\src\PasswordGenerator;
*/

use Kavalar\Password\PasswordGenerator;
use Kavalar\Password\CheckBox;
use Kavalar\Password\Submit;

require_once 'vendor/autoload.php';

$password = new PasswordGenerator();
//var_dump($argv);
$choice = '';
if ($choice == 1) {
    $lenght = getopt(null, ["lenght:"]);
    $complexity = getopt(null, ["complexity:"]);
} else {
    $lenght = null;
    $complexity = null;
    $CheckBox = new CheckBox();
    $submit = new Submit();
    echo $CheckBox->createCheckBox();
    echo $submit->createSubmit($lenght, $complexity);
}

echo $password->create($lenght, $complexity);
echo "\n";