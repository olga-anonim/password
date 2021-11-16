<?php

namespace Kavalar\Password\traits;

trait RandGenerator
{
      public function passGenerate($length, array $complexity = [0])
    {
        $arr[0] = ['a', 'b', 'c', 'd', 'e', 'f',
            'g', 'h', 'i', 'j', 'k', 'l',
            'm', 'n', 'o', 'p', 'r', 's',
            't', 'u', 'v', 'x', 'y', 'z'];
        $arr[1] = ['A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'R', 'S',
            'T', 'U', 'V', 'X', 'Y', 'Z'];
        $arr[2] = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        $arr[3] = [
            '.', ',', '(', ')', '[', ']',
            '!', '?', '&', '^', '%', '@',
            '*', '$', '<', '>', '/', '|',
            '+', '-', '{', '}', '`', '~'];

        $resArr = [];

        foreach ($complexity as $key=>$item){
            $resArr = array_merge($resArr, $arr[$item]);
        }


        $pass = "";
        for ($i = 0; $i < (int)$length; $i++) {
            // Вычисляем случайный индекс массива
            $index = rand(0, count($resArr) - 1);
            $pass .= $resArr[$index];
        }
        return $pass;
    }
}