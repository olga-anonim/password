<?php

namespace kavalar\password\traits;

trait SetLeght
{
    public function setLenght($length)
    {
        echo "Enter password length:";
        echo "<input type='number' value='password_length' >";
        if (isset($_POST['sub']))
            $length = $_POST['length'];
        return ($length);
    }
}