<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function services()
    {
        $services = ['enter', 'log out', 'other stuff'];
        return view('pages.services', compact('services'));
    }
}
