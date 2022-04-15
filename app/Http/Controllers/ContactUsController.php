<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
    /**
    * Middleware
    *
    *
    */
   public function __construct()
   {
       $this->middleware(['auth', 'permission:contact_us_management']);

       \config_set('theme.cdata', [
           'title' => 'Contact Us Management table',
           'model' => 'Contact Us',
           'route-name-prefix' => 'admin.contact-us',
           'back' => \back_url(),
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Contact Us Management Table',
                   'link' => false
               ],
           ],
           'add' => \route('admin.contact-us.create')
       ]);
   }


   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       \config_set('theme.cdata', [
           'description' => 'Display a listing of Contact Us in Database.',
       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       $collection = ContactUs::cacheData();
    //    $collection = ContactUs::all();
    //    dd($collection);

       return \view('pages.admin.contact-us.index', \compact('collection'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       \config_set('theme.cdata', [
           'title' => 'Create New Contact Us Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Contact Us Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Create New Contact Us Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'description' => 'Create new Contact Us Information in a database.',
       ]);

       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       return \view('pages.admin.contact-us.create_edit');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required',
           'phone' => 'required',
           'subject' => 'required',
           'description' => 'required',
       ]);
       $data = $request->all();
       $data['created'] = date('d M Y');
       $contactUs = ContactUs::create($data);


       // flash message
       Session::flash('success', 'Successfully Stored New Contact Us Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\ContactUs  $contactUs
    * @return \Illuminate\Http\Response
    */
   public function show(ContactUs $contactUs)
   {
        return \view('pages.admin.contact-us.show', ['item' => $contactUs]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\ContactUs  $contactUs
    * @return \Illuminate\Http\Response
    */
   public function edit(ContactUs $contactUs)
   {
       \config_set('theme.cdata', [
           'title' => 'Edit Contact Us Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'ContactUs Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Edit Contact Us Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'edit' => route(config('theme.cdata.route-name-prefix') . '.edit', $contactUs->id),
           'update' => route(config('theme.cdata.route-name-prefix') . '.update', $contactUs->id),
           'description' => 'Edit existing Contact Us Information.'

       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));


       return \view('pages.admin.contact-us.create_edit', ['item' => $contactUs]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\ContactUs  $contactUs
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, ContactUs $contactUs)
   {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ]);
       $data = $request->all();
       $contactUs->update($data);
       // flash message
       Session::flash('success', 'Successfully Updated Contact Us Information .');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\ContactUs  $contactUs
    * @return \Illuminate\Http\Response
    */
   public function destroy(ContactUs $contactUs)
   {
       $contactUs->delete();
       // flash message
       Session::flash('success', 'Successfully deleted Contact Us Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }
}

