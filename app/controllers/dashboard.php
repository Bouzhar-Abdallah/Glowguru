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
        $data = [];
        
        $Produits_dashboard = new Produits_dashboard;
        $data = $Produits_dashboard->search(
            array(
            'nom' => '',
            'categoriename' => ''
            ),
            array(
                'prix_achat' => '0',
                'prix_vente' => '0'
            )
    );

        foreach ($data as $key => $value) {
            $data[$key]['photo'] = base64_encode($value['photo']);
        }
        
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    
    public function categories()
    {
        $categories = new Categories();
        $data = $categories->selectAll();
        $this->view('dashboard','categories_table',$data);
    }
}
