<?php

class FileImporter{

    const IMPORT_FTP = 1;
    const IMPORT_DROPBOX = 2;
    const IMPORT_FILESYSTEM = 3;

    private $saveTo;
    private $config;

    public function __construct($saveTo, array $config){
        $this->saveTo = $saveTo;
        $this->config = $config;
    }

    public function import($file, $type){
        switch($type){
            case self::IMPORT_FTP:
                return $this->downloadFromFtp($file);
                break;
            case self::IMPORT_DROPBOX:
                return $this->downloadFromDropBox($file);
                break;
            case self::IMPORT_FILESYSTEM:
                return $this->downloadFromFileSystem($file);
                break;
            default:
                throw new Exception('Wrong type');
                break;
        }
    }

    private function downloadFromFtp($file){
        //...
    }

    private function downloadFromDropBox($file){
        //...
    }
    private function downloadFromFileSystem($file){
        //...
    }
}