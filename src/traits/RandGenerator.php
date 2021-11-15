<?php

namespace Kavalar\Password\traits;

trait RandGenerator
{
    use SetLeght;
    use SetComplexity;


    public function passGenerate($length, $complexity)
    {

        $arr = ['a', 'b', 'c', 'd', 'e', 'f',
            'g', 'h', 'i', 'j', 'k', 'l',
            'm', 'n', 'o', 'p', 'r', 's',
            't', 'u', 'v', 'x', 'y', 'z'];
        $arr_B = ['A', 'B', 'C', 'D', 'E', 'F',
            'G', 'H', 'I', 'J', 'K', 'L',
            'M', 'N', 'O', 'P', 'R', 'S',
            'T', 'U', 'V', 'X', 'Y', 'Z'];
        $arr_S = [
            '.', ',', '(', ')', '[', ']',
            '!', '?', '&', '^', '%', '@',
            '*', '$', '<', '>', '/', '|',
            '+', '-', '{', '}', '`', '~'];
        $arr_N = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];

        $str = [];


        // Генерируем пароль
        /* if (($ans_1 == 1) && ($ans_2 == 1) && ($ans_3 == 1)) $str = $arr . $arr_B . $arr_N.$arr_S;
         else if (($ans_1 == 1) && ($ans_2 == 1)&& ($ans_3 == 0)) $str = $arr . $arr_B.$arr_N;
         else if (($ans_1 == 1) && ($ans_2 == 0)&& ($ans_3 == 1)) $str = $arr . $arr_B.$arr_S;
         else if (($ans_1 == 0) && ($ans_2 == 1)&& ($ans_3 == 1)) $str = $arr . $arr_N.$arr_S;
         else if (($ans_1 == 1) && ($ans_2 == 0)&& ($ans_3 == 0)) $str = $arr . $arr_B;
         else if (($ans_1 == 0) && ($ans_2 == 0)&& ($ans_3 == 1)) $str = $arr . $arr_S;
         else if (($ans_1 == 0) && ($ans_2 == 1)&& ($ans_3 == 0)) $str = $arr . $arr_N;
         else $str = $arr;
        */
        $complexity = $complexity['complexity'];

        if ($complexity == 0) $str = array_merge($arr, $arr_B, $arr_N, $arr_S);
        else if ($complexity == 1) $str = $arr;
        else if ($complexity == 2) $str = array_merge($arr, $arr_B);
        else if ($complexity == 3) $str = array_merge($arr, $arr_S);
        else if ($complexity == 4) $str = array_merge($arr, $arr_N);
        else if ($complexity == 5) $str = array_merge($arr, $arr_B, $arr_N);
        else if ($complexity == 6) $str = array_merge($arr, $arr_B, $arr_S);
        else if ($complexity == 7) $str = array_merge($arr, $arr_N, $arr_S);
        //  $number = $this->setLeght();
        $pass = "";
        //   var_dump($str);
        for ($i = 0; $i < (int)$length['length']; $i++) {
            // Вычисляем случайный индекс массива
            $index = rand(0, count($str) - 1);
            $pass .= $str[$index];
        }
        return $pass;
    }
}