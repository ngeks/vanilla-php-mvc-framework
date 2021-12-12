<?php

class Pages extends Controller
{
    public function __construct()
    {
        // echo 'Pages controller loaded';
    }

    public function index()
    {
        $data = [
            'title' => 'Welcome to PHP MVC Framework'
        ];

        $this->view('pages/index', $data);
    }
}
