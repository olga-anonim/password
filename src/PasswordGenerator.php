<?php

namespace Kavalar\Password;

use Kavalar\Password\traits\RandGenerator;
use kavalar\password\traits\SetCmplexity;
use kavalar\password\traits\SetLeght;

class PasswordGenerator
{
    use RandGenerator;

    public function create($length, $complexity)
    {
//        echo "'Complexity 0 : use all', 'Complexity 1 : just letter'
//.<br>. 'Complexity 2 : add capital letters' .<br>. 'Complexity 3: add symbols' .<br>. 'Complexity 4: add numbers'
//.<br>. 'Complexity 123 :  add capital letters and symbols' .<br>. 'Complexity 124 :  add capital letters and numbers'
//.<br>. 'Complexity 134 : add symbols and numbers'";

        $attrs = $this->passGenerate($length, $complexity);
        return $attrs;
    }


}