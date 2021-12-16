<?php

class Pages extends Controller
{
    public function __construct()
    {
        // echo 'Pages controller loaded';
    }

    public function index()
    {
        if (isLoggedIn()) {
            redirect('posts');
        }
        
        $data = [
            'title' => 'Vanilla PHP MVC Framework',
            'description' => 'A simple CRUD application created with vanilla PHP following MVC model and object-oriented programming.',
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'email' => 'ngeksdev@gmail.com',
            'github' => 'https://github.com/ngeks/vanilla-php-mvc-framework',
            'version' => '1.0'
        ];

        $this->view('pages/about', $data);
    }
}
