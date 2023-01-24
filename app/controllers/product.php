<?php

class Product extends Controller
{
    function __construct()
    {
        
        if ($_SESSION['Glowguru']['ROLE'] != 'admin') {
            redirect('home');
        }
    }
    
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
    public function delete($a = '')
    {
        $prodcuts = new Produits();
        $prodcuts->delete($a);
        redirect("dashboard");
    }
    public function edit($a)
    {
        $prodcuts = new Produits();
        $categories = new Categories();
        
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $data = $_POST;
            $prodcuts->update($a,$data);    
            redirect("dashboard");
        }
        $data = $prodcuts->where(array('id'=>$a));
        $data[0]['categories'] = $categories->selectAll();
        $this->view('dashboard','editproduct',$data[0]);
    }

    public function switchFavorit($a){
        $prodcuts = new Produits();
        $state = $prodcuts->where(array('id'=>$a),'favoris')[0]['favoris'];
        if ($state === 'false') {
            show($state);
            $prodcuts->update($a,array('favoris'=>'true'));
        }else{
            show($state);
            $prodcuts->update($a,array('favoris'=>'false'));
        }
        //show($state);
        redirect('dashboard');
    }
}
