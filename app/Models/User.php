<?php declare(strict_types=1);

namespace App\Models;

use Charlama\Database\DbModel;

class User extends DbModel
{
    protected static string $table = 'users';

}