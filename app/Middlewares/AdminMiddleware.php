<?php declare(strict_types=1);

namespace App\Middlewares;

class AdminMiddleware 
{
    //put your code here
    public function handle()
    {
        if (1 !== 1) {
            die("ERROR IN MIDDLEWARE");
        }
    }
}
