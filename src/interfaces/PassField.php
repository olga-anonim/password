<?php

namespace Kavalar\Password\interfaces;

interface PassField
{
    public function create($length, $complexity);
}