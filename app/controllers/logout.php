<?php


class Logout extends Controller
{
    public function index()
    {
        //unset($_SESSION['client']);
        unset($_SESSION['Glowguru']);
        
        redirect('home');

    }
}

