<?php

namespace Kavalar\Password;

use kavalar\password\interfaces\CheckBoxInterface;
use kavalar\password\traits\SetCmplexity;
use kavalar\password\traits\IsCheaking;


class CheckBox implements CheckBoxInterface
{
    public function createCheckBox()
    {
        $box = '';
        $box .= "<input type='checkbox' name='check' value='' />";



        /*        $instruction = ['add capital letters', 'add numbers', 'add symbol'];

                $box = '';
                for ($i = 0; $i < 4; $i++) {
                    for ($j = 0; $j < 4; $j++) {
                        $box .= "<input type='checkbox' name='$i' value='$instruction[$j]' />";
        */
        return $box;

    }
}

