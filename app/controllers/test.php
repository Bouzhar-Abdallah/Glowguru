<?php

class Test extends Controller
{

    public function index()
    {
        $this->view('home', 'test');
    }
    public function post()
    {
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = json_decode(file_get_contents('php://input'), true);
            echo json_encode($data);
        } else {
            echo json_encode('test');
        }
    }
}
