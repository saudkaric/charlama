<?php


if (! function_exists('view'))
{
    function view (string $path, array $data = [], ?string $type = null): string
    {
        return \Charlama\View\View::render($path, $data, $type);
    }
}


if (! function_exists('request'))
{
    function request (string $key): mixed
    {
        return \Charlama\Http\Request::value($key);
    }
}

if (! function_exists('redirect'))
{
    function redirect (string $path)
    {
        return \Charlama\Url\Url::redirect($path);
    }
}

if (! function_exists('previous'))
{
    function previous (): string
    {
        return \Charlama\Url\Url::previous();
    }
}

if (! function_exists('url'))
{
    function url (string $path): string
    {
        return \Charlama\Url\Url::path($path);
    }
}

if (! function_exists('asset'))
{
    function asset (string $path): string
    {
        return \Charlama\Url\Url::path('assets/' . $path);
    }
}


if (! function_exists('session'))
{
    function session (string $key): mixed
    {
        return \Charlama\Session\Session::get($key);
    }
}

if (! function_exists('flash'))
{
    function flash (string $key): mixed
    {
        return \Charlama\Session\Session::flash($key);
    }
}

if (! function_exists('auth'))
{
    function auth (string $table): mixed
    {
        $auth = \Charlama\Session\Session::get($table) ?: \Charlama\Cookie\Cookie::get($table);

        return \Charlama\Database\DbModel::table($table)->where('id', $auth)->get();
    }
}


if (! function_exists('dnd'))
{
    function dnd (mixed $data): mixed
    {
        echo "<pre>";
        switch ($data)
        {
            case is_string(true):
                echo $data;
                break;
            default:
                print_r($data);
        }
        echo "</pre>";
        die();
    }
}