<?php

namespace App\Services;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Http;


class CoursesService
{
    private $uri;

    public function __construct($uri)
    {
        $this->uri = $uri;
    }

    public function getCourses()
    {
        $response = Http::post($this->uri)->body();

        try {
            $nodes = simplexml_load_string($response)->xpath('Currency');
        } catch (GuzzleException $e) {
            $e->getMessage();
        }

       foreach ($nodes as $node) {
            echo
                $node->CharCode . '=>' .
                $node->NumCode . '=>' .
                $node->Scale . '=>' .
                $node->Name . '=>' .
                $node->Rate . '<br/>';
        };

    }
}
