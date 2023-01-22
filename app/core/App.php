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

        $controllerFile = 'app/controllers/' . ucfirst($URL[0]) . 'Controller.php';

        if (file_exists($controllerFile)) 
        {
            require_once $controllerFile;
            $this->controller = ucfirst($URL[0]);
        } else 
        {
            $controllerFile = 'app/controllers/_404.php';
            require_once $controllerFile;
        }
    }
}
