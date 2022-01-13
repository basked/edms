<?php

namespace App\Http\Controllers\Solid\S\webmyself;

class Report
{
    private array $repData;
    private Template $template;

    public function __construct(array $repData, Template $template)
    {
        $this->repData = $repData;
        $this->template = $template;
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
            $this->template->render($this->repData);
        }
    }

    public function getData(){
        return $this->repData;
    }
}
