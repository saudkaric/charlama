<?php

namespace App\Middlewares;

class AdminMiddleware 
{
    public function handle() {
        if ( 1 !== 1) {
            die("BuHUU");
        }
    }
}
