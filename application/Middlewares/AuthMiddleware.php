<?php

namespace App\Middlewares;

class AuthMiddleware 
{
    public function handle() {
        if ( 1 !== 1) {
            die("BuHUU");
        }
    }
}
