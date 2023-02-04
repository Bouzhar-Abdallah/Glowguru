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
        
        $this->view('dashboard','forajax',$data);
    }
    public function old($a = '', $b = '', $c = '')
    {
        $data = [];
        
        $Produits_dashboard = new Produits_dashboard;
        $data = $Produits_dashboard->selectAll();
        
        
        $this->view('dashboard','products_table',$data);
    }
    public function getProductsAjax($a = '', $b = '', $c = '')
    {
        header('Content-Type: application/json');

        $data = [];
        $Produits_dashboard = new Produits_dashboard;

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $search = json_decode(file_get_contents('php://input'), true);
            
        } 

        $data = $Produits_dashboard->search($search['data_like'],$search['data_com']);

        foreach ($data as $key => $value) {
            $data[$key]['photo'] = base64_encode($value['photo']);
        }
        
        
        echo json_encode($data);
    }
    
    public function categories()
    {
        $categories = new Categories();
        $data = $categories->selectAll();
        $this->view('dashboard','categories_table',$data);
    }
}
