<?php

namespace App\Http\Controllers\Solid\S\webmyself;

class PhpTemplate implements Template
{
    function render($data)
    {
        echo 'PHP' . '<br/>';
        echo '<h3>' . $data['doctor'] . '</h3> ';
        echo '<h3>' . $data['patient'] . '</h3> ';
        echo '<h3>' . $data['date'] . '</h3> ';
    }
}
