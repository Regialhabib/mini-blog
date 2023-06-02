<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    function home()
    {
        $data = [
            'title' => 'Home',
        ];
        return view('home', $data);
    }
    function about()
    {
        $data = [
            'title' => 'About',];
        return view('about', $data);
    }

    function blog()
    {
        $data = [
            'title' => 'Blog',];
        return view('blog', $data);
    }
}
