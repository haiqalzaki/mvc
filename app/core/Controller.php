<?php

class Controller 
{    
    public function view($view, $data = []) 
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($modelFile, $className) 
    {
        require_once '../app/models/'. $modelFile . '.php';
        return new $className;
    }
}