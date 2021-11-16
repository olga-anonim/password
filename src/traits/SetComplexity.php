<?php

namespace kavalar\password\traits;

trait SetComplexity
{
    public function setComplexity($complexity)
    {
        if (isset($_POST['sub'])) {
            switch ($_POST['name[]']) {
                case $_POST['name[]'] = ($_POST['name[1]'] && $_POST['name[2]'] && $_POST['name[3]'] && $_POST['name[4]']):
                    $complexity = 0;
                    break;
                case $_POST['name[]'] = ($_POST['name[1]']):
                    $complexity = 1;
                    break;
                case $_POST['name[]'] = ($_POST['name[2]']):
                    $complexity = 2;
                    break;
                case $_POST['name[]'] = ($_POST['name[3]']):
                    $complexity = 3;
                    break;
                case $_POST['name[]'] = ($_POST['name[4]']):
                    $complexity = 4;
                    break;
                case $_POST['name[]'] = ($_POST['name[2]'] && $_POST['name[3]']) :
                    $complexity = 5;
                    break;
                case $_POST['name[]'] = ($_POST['name[1]'] && $_POST['name[2]'] && $_POST['name[3]']) :
                    $complexity = 5;
                    break;
                case $_POST['name[]'] = ($_POST['name[2]'] && $_POST['name[4]']) :
                    $complexity = 6;
                    break;
                case $_POST['name[]'] = ($_POST['name[1]'] && $_POST['name[2]'] && $_POST['name[4]']) :
                    $complexity = 6;
                    break;
                case $_POST['name[]'] = ($_POST['name[4]'] && $_POST['name[3]']) :
                    $complexity = 7;
                    break;
                case $_POST['name[]'] = ($_POST['name[1]'] && $_POST['name[4]'] && $_POST['name[3]']) :
                    $complexity = 7;
                    break;
            }
        }

        return ($complexity);
    }
}