<?php

namespace Kavalar\Password\config;

class Config
{

    public static function cliConfig()
    {
        return [
            'length' => [
                'alias' => 'ln',
                'default' => 8,
                'help' => 'Длина пароля, по умолчанию 8',
                'filter' => function ($name, $default) {
                    return !empty((int)$name) ? (int)$name : $default;
                },
            ],
            'complexity' => [
                'alias' => 'c',
                'default' => 1,
                'help' => 'Уровень сложности пароля, по умолчанию 1',
                'filter' => function ($name, $default) {
                    return !empty((int)$name) && $name < 5 && $name > 0 ? (int)$name : $default;
                },
            ],
        ];
    }

    public static function formConfig()
    {
        return [
            'template' => 'simple'
        ];
    }

}