<?php

namespace Kavalar\Password\interfaces;

interface SubmitInterface
{
public function createSubmit($length, $complexity);
}