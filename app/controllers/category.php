<?php

class Category extends Controller
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
        redirect("dashboard/categories");
    }
    public function delete($a = '')
    {
        
        $categorie = new Categories();
        $categorie->delete($a);
        redirect("dashboard/categories");
    }
}
