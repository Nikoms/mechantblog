<?php

class FileImporter
{

    private $saveTo;
    private $config;

    public function __construct($saveTo, array $config)
    {
        $this->saveTo = $saveTo;
        $this->config = $config;
    }

    public function import($file, $isDropBox = false)
    {
        if ($isDropBox) {
            return $this->downloadFromDropBox($file);
        }
        return $this->downloadFromFtp($file);
    }

    private function downloadFromFtp($file)
    {
        //...
    }

    private function downloadFromDropBox($file)
    {
        //...
    }
}