<?php

class App 
{
    private $controller = 'home';
    private $method     = 'index';
    
    private function splitURL()
    {
        $url = $_GET['url'];
        $url = trim($url,'/');
        $url = explode('/',$url);
        return $url;
    }

    public function loadController()
    {
        show($this->splitURL());
    }
}
