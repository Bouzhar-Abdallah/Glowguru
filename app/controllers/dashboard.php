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
    public function test($a = '', $b = '', $c = '')
    {
        $data = [];
        $search = array(
            'data_like' => array(
                'nom' => '',
                'categoriename' => ''
            ),
            'data_quantite' => array(
                'quantite' => '',
                'operator' => '>'
            ),
            'data_prix' => array(
                'prix_vente' => '',
                'operator' => '>'
            )
        );
        
       
        $Produits_dashboard = new Produits_dashboard;
        $data = $Produits_dashboard->search($search['data_like'],$search['data_prix'],$search['data_quantite']);
        
        
        $this->view('dashboard','products_table_test',$data);
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

        $data = $Produits_dashboard->search($search['data_like'],$search['data_com'],$search['data_operator']);

        if ($Produits_dashboard->status->rows_affected === 0) {
            echo json_encode('aucune data trouvè');
            die();
        } else{

            foreach ($data as $key => $value) {
                $data[$key]['photo'] = base64_encode($value['photo']);
            }
            
            
            echo json_encode($data);
        }

    }
    
    public function categories()
    {
        $categories = new Categories();
        $data = $categories->selectAll();
        $this->view('dashboard','categories_table',$data);
    }
}
