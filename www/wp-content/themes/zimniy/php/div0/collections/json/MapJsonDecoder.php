<?php

// TODO add json decoder exception
class MapJsonDecoder {
    private $dataString;

    public function __construct($dataString){
        $this->dataString = $dataString;
    }

    public function decode(){
        $rootMap = new Map('rootMap');
        $this->decodeObject($rootMap, $this->dataString);
        return $rootMap;
    }

    private function decodeObject($parentMap, $dataString){
        $stringIsJson = $this->isJson($dataString);

        //$reflect = new ReflectionClass($dataString);
        //$dataStringClass = $reflect->getShortName();

        $isObject = is_object($dataString);
        $isString = is_string($dataString);

        if($stringIsJson){
            $decodedObject = $this->decodeFromString($dataString);
        }
        else{
            throw new MapJsonEncoderException('MapJsonDecoder error. Data is not json');
        }
        $this->iterateObject($decodedObject, $parentMap);
    }

    private function iterateObject($decodedObject, $parentMap){
        foreach($decodedObject as $key=>$value){
            $valueIsJson = $this->isJson($value);

            if($valueIsJson){
                $subMap = new Map('subMap');

                $parentMap->add($key, $subMap);
                $this->decodeObject($subMap, $value);
            }
            else{
                $this->iterateObject($parentMap, $key, $value);
            }
        }
    }

    private function decodeFromString($dataString){
        $decodedObject = json_decode($dataString);
        $jsonDecodeException = json_last_error();

        if($jsonDecodeException){
            Logger::logError($jsonDecodeException);
            throw new MapJsonEncoderException('MapJsonDecoder exception. '.$jsonDecodeException);
            return;
        }
        return $decodedObject;
    }

    private function addToMap($map, $key, $value){
        $map->add($key, $value);
    }

    private function isJson($data) {
        json_decode($data);
        return (json_last_error() == JSON_ERROR_NONE);
    }
} 