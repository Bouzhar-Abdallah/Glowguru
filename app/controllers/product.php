<?php

class Product extends Controller
{
    function __construct()
    {

        if ($_SESSION['Glowguru']['ROLE'] != 'admin') {
            redirect('home');
        }
        
    }
    private function sortData($data)
    {
        $result = array();
        foreach($data as $key => $value) {
            foreach($value as $innerKey => $innerValue) {
                $result[$innerKey][$key] = $innerValue;
            }
        }
        return $result;   
    }
    private function merge($data, $files)
    {
        
        foreach ($data as $key => $value) {
            $data[$key]['photos']=$files[$key];
        }
        return $data;
    }

    public function index($a = '', $b = '', $c = '')
    {
        $categories = new Categories();
        $data = $categories->selectAll();
        $this->view('dashboard', 'newproduct', $data);
    }

    public function add()
    {
        showd('submitted');
        $data = $_POST;
        $files = $_FILES['photos']['tmp_name'];
        $data = $this->sortData($data);
        $files = $this->sortData($files);
        $data = $this->merge($data,$files);
        
        

        $produits = new Produits();
        $photos = new Photos();
        foreach ($data as $key => $value) {
            $productphotos=$value['photos'];
            unset($value['photos']);
            $last_id = $produits->insert($value);
            $key = 1;
            foreach ($productphotos as $innerValue) {
                //base64_encode()
                $photo['photo'] = file_get_contents($innerValue);

                $photo['photo_order'] = $key;
                $photo['id_produit'] = $last_id;
                $photos->insert($photo);
                $key++;
            }
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

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            $prodcuts->update($a, $data);
            redirect("dashboard");
        }
        $data = $prodcuts->where(array('id' => $a));
        $data[0]['categories'] = $categories->selectAll();
        $this->view('dashboard', 'editproduct', $data[0]);
    }

    public function switchFavorit($a)
    {
        $prodcuts = new Produits();
        $state = $prodcuts->where(array('id' => $a), 'favoris')[0]['favoris'];
        if ($state === 'false') {
            show($state);
            $prodcuts->update($a, array('favoris' => 'true'));
        } else {
            show($state);
            $prodcuts->update($a, array('favoris' => 'false'));
        }
        //show($state);
        redirect('dashboard');
    }
}
