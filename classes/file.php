<?php

namespace classes;

class File
{
    private $fileName;

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    public function __construct($fileNam = null)
    {
        $this->fileName = $fileNam;
    }

    public function read()
    {
        return file_get_contents("$this->fileName");
    }

    public function rewrite($text)
    {
        file_put_contents("$this->fileName", $text, 0);
    }

    public function append($text)
    {
        file_put_contents("$this->fileName", $text, FILE_APPEND);
    }
}