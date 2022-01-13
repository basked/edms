<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Solid\O\webmyself\DBSaver;
use App\Http\Controllers\Solid\O\webmyself\FileSaver;
use App\Http\Controllers\Solid\O\webmyself\ReportRepository;
use App\Http\Controllers\Solid\O\webmyself\Saver;
use App\Http\Controllers\Solid\S\webmyself\HTMLTemplate;
use App\Http\Controllers\Solid\S\webmyself\PhpTemplate;
use App\Http\Controllers\Solid\S\webmyself\Report;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Helpers\Arrays\BasArrays;
use App\Http\Controllers\Solid\S\webmyself\ReportData;
use App\Http\Requests\StoreTypeRequest;
use App\Http\Requests\UpdateTypeRequest;
use App\Models\Type;
use phpDocumentor\Reflection\Types\This;
use App\Http\Controllers\Helpers\BasHelper;

/**
 *
 */
class BasController extends Controller
{
    public function getSolid($x)
    {
        switch ($x) {
            case 's':
            {
//                 $reportData = []; //Если данных нет вывести сообщение и ошибку 404
                $reportData = (new ReportData())->getPrepareData();
                $templateHtml = new HTMLTemplate();
                $templatePhp = new PhpTemplate();
                $reportHtml = new Report($reportData, $templateHtml);
                $reportPhp = new Report($reportData, $templatePhp);
                $reportHtml->showReport();
                $reportPhp->showReport();
                break;
            }
            case 'o':
            {
                $reportData = (new ReportData())->getPrepareData();
                $reportHtml = new Report($reportData, (new PhpTemplate()));
                $saver = new FileSaver(__DIR__ . '/report.html');
                $saver = new DBSaver();
                $rp = new  ReportRepository($reportHtml, $saver );
                $rp->save($reportData);
                break;
            }
        }
    }


    /**
     * @return void
     */
    public
    function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        BasArrays::basArrays();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        dd(234);
    }
}
