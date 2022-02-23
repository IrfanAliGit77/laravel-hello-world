<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return 'NIM      : 2041720067' . '<br>' .
            'Nama     : Muh. Irfan Ali' . '<br>' . 'Kelas    : TI-2G';
    }
}
