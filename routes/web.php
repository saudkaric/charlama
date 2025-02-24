<?php declare(strict_types=1);

use Charlama\Router\Route;

// Route for the index endpoint
Route::get('/', ['page','home']);

// Route for not found endpints
Route::get('/not-found', 'page@notFound');

/*
// example of end point with middleware and prefix route
Route::middleware('admin', function () {

    Route::prefix('admin', function () {

        Route::get('dashboard', 'page@home');

    });

});

*/