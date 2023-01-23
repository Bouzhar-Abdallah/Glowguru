<?php

class Product extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $categories = new Categories();
        $data = $categories-> selectAll();
        $this->view('dashboard','newproduct',$data);
    }
    public function add()
    {
        $data = $_POST;
        
        $produits = new Produits();
        $photos = new Photos();
        $last_id = $produits->insert($data);

        $key = 1;
        foreach ($_FILES['photos']['tmp_name'] as $value) {
            $photo['photo'] = file_get_contents($value);
            $photo['photo_order'] = $key;
            $photo['id_produit'] = $last_id;
            $photos->insert($photo);
            $key++;
        }
        redirect('dashboard');
    }
}
