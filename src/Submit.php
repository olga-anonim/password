<?php

namespace Kavalar\Password;

use kavalar\password\interfaces\SubmitInterface;
use Kavalar\Password\traits\SetComplexity;
use Kavalar\Password\traits\SetLeght;

class Submit implements SubmitInterface
{
    use SetLeght;
    use SetComplexity;

    public function createSubmit($length, $complexity)
    {
        $length = $this->setLenght($length);
        $complexity = $this->setComplexity($complexity);
        return "<input type='submit' name='sub' value='Отправь меня!' $length,  $complexity/>";

    }
}