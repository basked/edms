<?php

namespace App\Http\Controllers\Solid\O\webmyself;

class FileSaver implements Saver
{
    private $filePath;

    /**
     * @param $filePath
     */
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function save($data){

        file_put_contents($this->filePath,$data);
    }


}
