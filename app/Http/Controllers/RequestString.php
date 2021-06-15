<?php


namespace App\Http\Controllers;


class RequestString
{
    private string $string;
    private bool $hasRequest;
    private array $queries;

    public function __construct()
    {
        $this->queries = [];
        $this->string = 'undefined';
        $this->hasRequest = false;
    }

    public function clear(): string
    {
        $this->queries = [];
        $this->hasRequest = false;
        return $this->string = '';
    }
    private function initiate():string{
        $this->hasRequest = true;
        return $this->string = '?';
    }

    public function addRequest(string $key, $value): string
    {

        /*if(!(array_key_exists($key, $this->queries))){
            array_push($this->queries, [$key=>$value]);
            if(!($this->hasRequest)){
                $this->string = $this->initiate();
            } else {
                $this->string = $this->string.'&';
            }
            $this->string.= $key.'='.$value;
        }*/


        return $this->initiate().$key.'='.$value;
    }
}
