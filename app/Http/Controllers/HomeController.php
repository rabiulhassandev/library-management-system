<?php

namespace App\Http\Controllers;

use App\Models\Admin\PageBuilder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        return \view('pages.front.home');
    }

    // Books Page
    public function books()
    {
        return \view('pages.front.books');
    }

    // Contact Us Page
    public function contactUs()
    {
        return \view('pages.front.contact-us');
    }

    // Categories Page
    public function categories()
    {
        return \view('pages.front.categories');
    }

    // Pages
    public function page(PageBuilder $page)
    {
        return view('pages.front.page', compact('page'));
    }

}
