<?php

class Home extends Controller
{
    public function index()
    {
        $data = [];
        $produits = new Produits();
        $categories = new Categories();
        $photos = new Photos();
        $data = $produits->where(array('favoris'=> 'true'));
        if(!empty($data))foreach ($data as $key => $value) {
            
            $data[$key]['photo'] = $photos->productPhotos($data[$key]['id']);
        }
        //show($data);
        $this->view('home','slider',$data);
    }
    /* categories */
    public function cat($a = '')
    {
        $produits = new Produits();
        $categories = new Categories();
        $photos = new Photos();
        $data = $produits->where(array('categorie_id'=> $a));
        if(!empty($data))foreach ($data as $key => $value) {
            $data[$key]['categoriename'] = $categories->categoriename($value['categorie_id']);
            $data[$key]['photo'] = $photos->productPhoto($data[$key]['id']);
        }
        //show($data);
        $this->view('home','home',$data);
    }
    
    public function product($a = '')
    {
        $data = [];
        $produits = new Produits();
        $data = $produits->where(array('id'=> $a))[0];
        
        $this->view('home','productpage',$data);

    }
}
