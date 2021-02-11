<?php
namespace App;

use Exception;

use function PHPUnit\Framework\returnSelf;

class Config
{
    public array $data;
    private string $defaultConfigJsonFile='config.json';
    public function __construct(string $jsonData=null)
    {
        if ($jsonData) {
            $this->readFromJsonData($jsonData);
        } else {
            $this->readFromDefaultJsonFile();
        }
    }
    public function readFromJsonData($data)
    {
        $jsonData=\json_decode($data, true);
        if (json_last_error() === JSON_ERROR_NONE) {
            $this->data=$jsonData;
        } else {
            throw new Exception('Provide a proper json formate');
        }
    }
    public function readFromDefaultJsonFile()
    {
        $path=__DIR__."/../".$this->defaultConfigJsonFile;
        if (\file_exists($path)) {
            $this->data=\json_decode(\file_get_contents($path), \true);
        } else {
            throw(new Exception('config file not found'));
        }
    }
    public function data()
    {
        return $this->data;
    }
    public function get(string $attributeName)
    {
        $attributePath=\explode('.', $attributeName);
        $data=$this->data;//only temp container
        $attributePathLength=\count($attributePath);
        foreach ($attributePath as $currentKey=>$value) {
            if ($attributePathLength<2) {
                return $data[$value]??throw new Exception('This attribute Not found in configuration');
            }
            if (\array_key_exists($value, $data)) {
                $data=$data[$value];
                $attributePathLength--;
            } else {
                throw(new Exception('This attribute Not found in configuration'));
            }
        }
        throw(new Exception('This attribute Not found in configuration'));
    }
}