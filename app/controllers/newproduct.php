<?php

class NewProduct extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $this->view('dashboard','newproduct');
    }
}
