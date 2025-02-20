<?php declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;

class PageController
{
    public function homeAction(): string
    {
        return view('pages.home');
    }

    public function notFoundAction(): string
    {
        http_response_code(404);
        return view('pages.not-found');
    }
}
