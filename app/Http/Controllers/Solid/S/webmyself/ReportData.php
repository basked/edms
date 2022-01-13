<?php

namespace App\Http\Controllers\Solid\S\webmyself;

/**
 * Одна ответственность - формирование данных для отчёта
 */
class ReportData
{

    public function getDoctor()
    {
        return "Doctor";
    }

    public function getPatient()
    {
        return "Patient";
    }

    public function getDate()
    {
        return "12/01/2022";
    }

    public function getPrepareData()
    {
        return [
            'doctor' => $this->getDoctor(),
            'patient' => $this->getPatient(),
            'date' => $this->getDate()
        ];
    }

}


