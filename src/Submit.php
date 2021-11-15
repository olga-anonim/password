<?php

namespace Kavalar\Password;

use kavalar\password\interfaces\SubmitInterface;
use kavalar\password\traits\SetLeght;
use kavalar\password\traits\SetCmplexity;

class Submit implements SubmitInterface
{
    use SetCmplexity;
    use SetLeght;

    public function createSubmit($length, $complexity)
    {   $length = $this ->setLenght($length);
        $complexity = $this-> setComplexity($complexity);
        echo "<input type='submit' name='sub_lc' value='Отправь меня!' $length,  $complexity/>";
    }


}