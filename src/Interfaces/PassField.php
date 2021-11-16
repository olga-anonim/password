<?php

namespace kavalar\password\interfaces;

interface PassField
{
public function  create($length, $complexity);
}