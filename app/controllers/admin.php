<?php

class Admin extends Controller
{
    function __construct()
    {
        if ($_SESSION['Glowguru']['ROLE'] != 'admin') {
            redirect('home');
        }
    }
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            showd($_POST);
        }
        $this->view('dashboard','newadmin');
    }
    public function validate(){
        
    }
}
