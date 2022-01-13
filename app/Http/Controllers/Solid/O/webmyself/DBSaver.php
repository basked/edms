<?php

namespace App\Http\Controllers\Solid\O\webmyself;

use App\Models\Report;

class DBSaver implements Saver
{
    public function save($data)
   {
       Report::create(['name'=>'report', 'data'=>json_encode($data),'is_active'=>true]);
    }

}
