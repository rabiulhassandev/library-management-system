<?php

namespace App\Http\Controllers;

use App\Models\Admin\PageBuilder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return \view('welcome');
    }

    public function page(PageBuilder $page)
    {
        return view('pages.front.page', compact('page'));
    }

}
