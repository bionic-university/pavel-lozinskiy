<?php

class ParseMyCSVFile
{

    public $getFileName, $dataToSTDOUT, $delimiterSimbol, $counter, $fileHandler, $dataFromFile;

    public function __construct($_getFileName)
    {
        $this->getFileName = $_getFileName;
        $this->dataToSTDOUT = "";
        $this->delimiterSimbol = ",";
        $this->counter = 0;
        $this->fileHandler;
        $this->dataFromFile;
    }

    public function PrintToConsole()
    {
        fwrite(STDOUT, "\n");
        return fwrite(STDOUT, $this->dataToSTDOUT) . PHP_EOL;
    }

    public function GetFile()
    {
        $this->fileHandler = fopen($this->getFileName, "r");
        return $this->fileHandler;
    }

    public function GetCSVFile()
    {
        $this->dataFromFile = fgetcsv($this->fileHandler, $this->delimiterSimbol);
        return $this->dataFromFile;
    }

    public function ParseFile()
    {
        if ($this->GetFile() !== false) {
            while ($this->GetCSVFile() !== false) {

                for ($this->counter = 0; $this->counter < count($this->dataFromFile); $this->counter++) {
                    $this->dataToSTDOUT = $this->dataToSTDOUT . $this->dataFromFile[$this->counter] . ' | ';
                }

                $this->PrintToConsole();
                $this->dataToSTDOUT = "";
            }
            fclose($this->fileHandler);
        }
    }
}

$dt = new ParseMyCSVFile("csv_file.csv");
echo $dt->ParseFile() . PHP_EOL;
