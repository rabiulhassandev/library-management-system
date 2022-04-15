<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
    * Middleware
    *
    *
    */
   public function __construct()
   {
       $this->middleware(['auth', 'permission:profile_management']);

       \config_set('theme.cdata', [
           'title' => 'Profile Management table',
           'model' => 'Profile',
           'route-name-prefix' => 'admin.profile',
           'back' => \back_url(),
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Profile Management Table',
                   'link' => false
               ],
           ],
           'add' => \route('admin.profile.create')
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
           'description' => 'Display a listing of Profile in Database.',
       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       $collection = Profile::cacheData();
    //    $collection = Profile::all();
    //    dd($collection);

       return \view('pages.admin.profile.index', \compact('collection'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       \config_set('theme.cdata', [
           'title' => 'Create New Profile Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Profile Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Create New Profile Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'description' => 'Create new Profile Information in a database.',
       ]);

       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       return \view('pages.admin.profile.create_edit');
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
           'phone' => 'required'
       ]);
       $data = $request->all();
       $data['image'] = \upload_image($request, 'image', 'profile');
       $profile = Profile::create($data);


       // flash message
       Session::flash('success', 'Successfully Stored New Profile Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Profile  $profile
    * @return \Illuminate\Http\Response
    */
   public function show(Profile $profile)
   {
        return \view('pages.admin.profile.show', ['item'=>$profile]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Profile  $profile
    * @return \Illuminate\Http\Response
    */
   public function edit(Profile $profile)
   {
       \config_set('theme.cdata', [
           'title' => 'Edit Profile Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Profile Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Edit Profile Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'edit' => route(config('theme.cdata.route-name-prefix') . '.edit', $profile->id),
           'update' => route(config('theme.cdata.route-name-prefix') . '.update', $profile->id),
           'description' => 'Edit existing Profile Information.'

       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));


       return \view('pages.admin.profile.create_edit', ['item' => $profile]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Profile  $profile
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Profile $profile)
   {
        $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);
        $data = $request->all();
        $data['image'] = \upload_image($request, 'image', 'profile', $profile->image);
        $profile->update($data);
        // flash message
        Session::flash('success', 'Successfully Updated Profile Information .');
        return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Profile  $profile
    * @return \Illuminate\Http\Response
    */
   public function destroy(Profile $profile)
   {
       $profile->delete();
       // flash message
       Session::flash('success', 'Successfully deleted Profile Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }
}
