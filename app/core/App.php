<?php

class App
{
    private $controller = 'home';
    private $method     = 'index';

    private function splitURL()
    {
        $url = $_GET['url'] ?? 'home';
        $url = trim($url, '/');
        $url = explode('/', $url);
        return $url;
    }

    public function loadController()
    {
        $URL = $this->splitURL();

        $controllerFile = 'app/controllers/' . ucfirst($URL[0]) . '.php';

        if (file_exists($controllerFile)) 
        {
            require_once $controllerFile;
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        } else 
        {
            $controllerFile = 'app/controllers/_404.php';
            $this->controller = "_404";
            require_once $controllerFile;
        }
        
        $controller = new $this->controller;
        
        if (!empty($URL[1])) {
            if (method_exists($controller,$URL[1])) {
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }

        call_user_func_array([$controller,$this->method],$URL);
    }
}
