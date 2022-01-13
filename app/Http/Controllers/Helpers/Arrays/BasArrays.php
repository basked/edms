<?php

namespace App\Http\Controllers\Helpers\Arrays;


use App\Http\Controllers\Helpers\BasHelper;

class BasArrays extends  BasHelper
{
    //
    public static function basArrays()
    {
        $a = [
            1 => 1,
            1.2 => 2,
            '1' => 3,
            true => 4,
            null => 5,
        ];
        self::showMessage('Arrays', $a );
    }

}
