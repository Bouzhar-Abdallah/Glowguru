<?php

class Dashboard extends Controller
{
    function __construct()
    {
        
        if ($_SESSION['Glowguru']['ROLE'] != 'admin') {
            redirect('home');
        }
    }
    public function index($a = '', $b = '', $c = '')
    {
        $data = [];
        $produits = new Produits();
        $categories = new Categories();
        $data = $produits->selectAll();
        if(!empty($data))foreach ($data as $key => $value) {
            $data[$key]['categoriename'] = $categories->categoriename($value['categorie_id']);
        }
        //show($data);
        $this->view('dashboard','products_table',$data);
    }
    
    public function categories()
    {
        $categories = new Categories();
        $data = $categories->selectAll();
        $this->view('dashboard','categories_table',$data);
    }
}
