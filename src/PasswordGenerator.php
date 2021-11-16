<?php

namespace Kavalar\Password;

use Kavalar\Password\interfaces\PassField;
use Kavalar\Password\traits\RandGenerator;
use Kavalar\Password\traits\SetComplexity;
use Kavalar\Password\traits\SetLeght;

class PasswordGenerator implements PassField
{
    use RandGenerator;

    public function create($length, $complexity)
    {
        return $this->passGenerate($length, $complexity);
    }


}