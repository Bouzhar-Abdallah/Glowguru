<?php

class NewCategory extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $this->view('dashboard','newcategorie');
    }
}
