<?php

namespace App\Controllers;

class PageController {

    public function __construct() {}
    
    public function homeAction()
    {
        $data = [];
        return view('pages.home', $data);
    }
}