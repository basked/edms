<?php

namespace App\Http\Controllers\Helpers;



class BasHelper
{



    /**
     * @param string $title
     * @param string $msg
     * @return void
     */
    public static function showMessage(string $title, mixed ...$msg)
    {

        echo "================================$title==========================================<br/>";

        if (is_array($msg)) {
            echo '<pre>';

             var_dump($msg);
             echo '<pre>';
         };
        if (is_string($msg)) {
            echo $msg;
        }

        echo "<br/>================================================================================<br/>";
    }

}
