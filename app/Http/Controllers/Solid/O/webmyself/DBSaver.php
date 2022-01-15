<?php

namespace App\Http\Controllers\Solid\O\webmyself;

use App\Models\Report;
use Illuminate\Database\Eloquent\Model;

class DBSaver implements Saver
{

    protected Model $model;

    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function save($data)
    {
        $this->model->create(['name' => 'report', 'data' => json_encode($data), 'is_active' => true]);
    }

}
