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

    // Books Page
    public function bookDetails()
    {
        return \view('pages.front.book-details');
    }

    // Contact Us Page
    public function contactUs()
    {
        return \view('pages.front.contact-us');
    }

    // Registration Page
    public function registration()
    {
        return \view('pages.front.registration');
    }

    // About Us Page
    public function aboutUs()
    {
        return \view('pages.front.about-us');
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
