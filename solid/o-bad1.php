<?php

class FileImporter{

    private $saveTo;
    private $config;

    public function __construct($saveTo, array $config){
        $this->saveTo = $saveTo;
        $this->config = $config;
    }

    public function import($file){
        $connectionId = ftp_connect($this->config['server']);
        ftp_login($connectionId, $this->config['user'], $this->config['password']);
        $return = ftp_get($connectionId, $this->saveTo . DIRECTORY_SEPARATOR . $file, $file, FTP_BINARY);
        ftp_close($connectionId);
        return $return;
    }
}