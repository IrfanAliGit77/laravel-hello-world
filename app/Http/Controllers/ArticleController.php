<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles()
    {
        return 'Ini adalah halaman Artikel dengan Id: ' . '$id';
    }
}
