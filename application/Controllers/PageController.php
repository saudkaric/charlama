<?php

namespace App\Controllers;

class PageController {

    public function __construct() {}
    
    public function homeAction()
    {             
        return view('pages.home', $data);
    }
}