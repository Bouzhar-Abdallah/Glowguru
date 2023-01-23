<?php

class NewCategory extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $this->view('dashboard','newcategorie');
    }
    public function add()
    {
        //show($_POST);
        $data = $_POST;
        $categorie = new Categories();
        $categorie->insert($data);
        redirect("dashboard");
    }
}
