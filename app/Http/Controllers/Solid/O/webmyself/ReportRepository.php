<?php

namespace App\Http\Controllers\Solid\O\webmyself;

use App\Http\Controllers\Solid\S\webmyself\Report;

class ReportRepository
{
    private Report $report;
    private Saver $saver;

    /**
     * @param Report $report
     * @param FileSave $saver
     */
    public function __construct(Report $report, Saver $saver)
    {
        $this->report = $report;
        $this->saver = $saver;
    }

    public function save()
    {
        $this->saver->save($this->report->getData());
    }

}
