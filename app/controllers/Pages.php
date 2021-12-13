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
            'title' => 'Welcome to PHP MVC Framework',
            'description' => 'A simple MVC Framework created with vanilla PHP following object-oriented programming.'
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'A basic CRUD PHP application.'
        ];

        $this->view('pages/about', $data);
    }
}
