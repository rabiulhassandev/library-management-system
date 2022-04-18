<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    /**
    * Middleware
    *
    *
    */
   public function __construct()
   {
       $this->middleware(['auth', 'permission:slider_management']);

       \config_set('theme.cdata', [
           'title' => 'Slider Management table',
           'model' => 'Slider',
           'route-name-prefix' => 'admin.slider',
           'back' => \back_url(),
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Slider Management Table',
                   'link' => false
               ],
           ],
           'add' => \route('admin.slider.create')
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
           'description' => 'Display a listing of Slider in Database.',
       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       $collection = Slider::cacheData();
    //    $collection = Slider::all();
    //    dd($collection);

       return \view('pages.admin.slider.index', \compact('collection'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       \config_set('theme.cdata', [
           'title' => 'Create New Slider Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Slider Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Create New Slider Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'description' => 'Create new Slider Information in a database.',
       ]);

       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       return \view('pages.admin.slider.create_edit');
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
           'title' => 'required',
       ]);
       $data = $request->all();
       $data['image'] = \upload_image($request, 'image', 'slider');
       $slider = Slider::create($data);


       // flash message
       Session::flash('success', 'Successfully Stored New Slider Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */
   public function show(Slider $slider)
   {
        return \view('pages.admin.slider.show', ['item' => $slider]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */
   public function edit(Slider $slider)
   {
       \config_set('theme.cdata', [
           'title' => 'Edit Slider Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Slider Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Edit Slider Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'edit' => route(config('theme.cdata.route-name-prefix') . '.edit', $slider->id),
           'update' => route(config('theme.cdata.route-name-prefix') . '.update', $slider->id),
           'description' => 'Edit existing Slider Information.'

       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));


       return \view('pages.admin.slider.create_edit', ['item' => $slider]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Slider $slider)
   {
        $request->validate([
            'title' => 'required',
        ]);
        $data = $request->all();
        $data['image'] = \upload_image($request, 'image', 'slider');
       $slider->update($data);
       // flash message
       Session::flash('success', 'Successfully Updated Slider Information .');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Slider  $slider
    * @return \Illuminate\Http\Response
    */
   public function destroy(Slider $slider)
   {
       $slider->delete();
       // flash message
       Session::flash('success', 'Successfully deleted Slider Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }
}

