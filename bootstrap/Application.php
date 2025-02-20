<?php declare(strict_types=1);

use Charlama\Exceptions\Whoops;
use Charlama\File\File;
use Charlama\Http\Request;
use Charlama\Http\Response;
use Charlama\Router\Route;
use Charlama\Session\Session;

class Application 
{
    public function __construct() {}
    
    public function run()
    {
        // Error handler
        Whoops::handle('local');
        // Start session
        Session::start();
        // Handel request
        Request::handel();
        // Require all routes direcoty
        File::require_dir('routes');
        // Handle the route
        $data = Route::handel();
        // Handle the response
        Response::output($data);
    }
}
