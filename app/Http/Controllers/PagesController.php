<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $people = [
            'Janice Clarke', 'Ronald Atkins', 'Monte Christo'
        ];

        return view('pages.about')->with(compact('people'));
    }

    public function contact()
    {
        $first = 'jon';
        $last = 'clark';

        return view('pages.contact')->with(compact('first', 'last'));
    }
}
