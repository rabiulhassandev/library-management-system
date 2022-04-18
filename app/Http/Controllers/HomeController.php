<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Slider;
use App\Models\ContactUs;
use App\Models\Admin\Role;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\UserStatus;
use App\Models\Admin\PageBuilder;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        $collection['sliders'] = Slider::cacheData();
        return \view('pages.front.home', \compact('collection'));
    }

    // Books Page
    public function books()
    {
        return \view('pages.front.books');
    }

    // Academic Books Page
    public function academicBooks()
    {
        return \view('pages.front.academic-books');
    }

    // Book Details Page
    public function bookDetails()
    {
        return \view('pages.front.book-details');
    }

    // Book Request Page
    public function bookRequest()
    {
        return \view('pages.front.book-request');
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


    // Contact Us Form
    function contactUsFrom(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'description' => 'required'
        ]);
        $data = $request->all();
        $data['created'] = date('d M Y');
        $contactUs = ContactUs::create($data);

        // flash message
        Session::flash('success', 'Successfully Stored New Book Writer Information.');
        return \redirect()->back();
    }


    // User Registration
    public function userRegistration(Request $request){
        $data = $request->all();
        // seo
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required',
            'password' => ['required', 'string', new Password, 'confirmed'],
        ]);
        if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => 'image',
            ]);

            $data['profile_photo_path'] = $request->avatar->store('users');
        }
        $data['password'] = Hash::make($request->password);
        $data['role'] = "User";
        $user = User::create($data)->assignRole($data['role']);
        // flash message
        Session::flash('success', 'আপনার রেজিষ্ট্রেশন সম্পন্ন হয়েছে। আপনি এখন লগইন করতে পারবেন।');
        return \redirect()->back();
    }

}
