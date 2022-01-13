<?php

namespace App\Http\Controllers\Solid\S\webmyself;

class Report
{
    private array $repData;
    private View $view;

    public function __construct(array $repData, View $view)
    {
        $this->repData = $repData;
        $this->view = $view;
    }

    private function validateData()
    {
        if (empty($this->repData)) {
           echo 'Необходимо заполнить данные';
           abort(404);
        }
        return true;
    }

    public function showReport()
    {
        if ($this->validateData()) {
            $this->view->render($this->repData);
        }
    }

    public function getData(){
        return $this->repData;
    }
}
