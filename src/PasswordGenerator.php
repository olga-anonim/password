<?php

namespace Kavalar\Password;

use Couchbase\PasswordAuthenticator;
use kavalar\password\interfaces\PassField;
use Kavalar\Password\traits\RandGenerator;
use Kavalar\Password\traits\SetComplexity;
use Kavalar\Password\traits\SetLeght;

class PasswordGenerator implements PassField
{
    use RandGenerator;

    public function create($length, $complexity)
    {
        $attrs = $this->passGenerate($length, $complexity);
        return $attrs;
    }


}