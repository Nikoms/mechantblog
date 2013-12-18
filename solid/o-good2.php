<?php

//Implémenté par les classes DropBox et Ftp
interface InputStream
{
    public function getContent($file);
}

class FileImporter
{

    private $saveTo;

    //Même plus besoin de config!
    public function __construct($saveTo)
    {
        $this->saveTo = $saveTo;
    }

    public function import(InputStream $fileStream, $file)
    {
        file_put_contents($this->saveTo . DIRECTORY_SEPARATOR . $file, $fileStream->getContent($file));
    }
}
