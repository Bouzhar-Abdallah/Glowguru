<?php

class Category extends Controller
{
    function __construct()
    {
        if ($_SESSION['Glowguru']['ROLE'] != 'admin') {
            redirect('home');
        }
    }
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
        showd($categorie->last_id_inserted);
        
        redirect("dashboard/categories");
    }
    public function edit($a)
    {
        $categories = new Categories();
        
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $data = $_POST;
            $categories->update($a,$data);    
            redirect("dashboard/categories");
        }
        
        $data = $categories->where(array('id'=>$a));
        $this->view('dashboard','editcategorie',$data[0]);
    }
    public function delete($a = '')
    {
        
        $categorie = new Categories();
        $categorie->delete($a);
        redirect("dashboard/categories");
    }
}
