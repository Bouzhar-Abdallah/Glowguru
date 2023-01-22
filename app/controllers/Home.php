<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        show($a);
        show($b);
        show($c);
    }
}
