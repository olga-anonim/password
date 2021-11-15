<?php

namespace kavalar\password\interfaces;

interface SubmitInterface
{
public function createSubmit($length, $complexity);
}