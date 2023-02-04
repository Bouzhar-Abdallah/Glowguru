<?php

class Test extends Controller
{

    public function index()
    {
        $Produits_dashboard = new Produits_dashboard;
        $data = $Produits_dashboard->search(
            array(
            'nom' => 'a',
            'category' => 'skin'
            ),
            array(
                'prix_achat' => '30',
                'prix_vente' => '70'
            ),
            '<'
    );
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
