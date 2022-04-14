<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LibraryController extends Controller
{
    /**
    * Middleware
    *
    *
    */
   public function __construct()
   {
       $this->middleware(['auth', 'permission:library_management']);

       \config_set('theme.cdata', [
           'title' => 'Library Management table',
           'model' => 'Library',
           'route-name-prefix' => 'admin.library',
           'back' => \back_url(),
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Library Management Table',
                   'link' => false
               ],
           ],
           'add' => \route('admin.library.create')
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
            'description' => 'Display a listing of Library in Database.',
        ]);
        // seo
        $this->seo()->setTitle(config('theme.cdata.title'));
        $this->seo()->setDescription(\config('theme.cdata.description'));

        //    $collection = library::cacheData();
        $collection = library::all();
        //    dd($collection);

        return \view('pages.admin.library.index', \compact('collection'));
    }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       \config_set('theme.cdata', [
           'title' => 'Create New Library Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Library Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Create New Library Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'description' => 'Create new Library Information in a database.',
       ]);

       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       return \view('pages.admin.library.create_edit');
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
           'library_name' => 'required|unique:libraries,library_name',
           'library_phone' => 'required'
       ]);
       $data = $request->all();
       $data['library_slug'] = Str::slug($request->library_name);
       $data['library_image'] = \upload_image($request, 'library_image', 'library');
       $library = library::create($data);

       // flash message
       Session::flash('success', 'Successfully Stored New Library Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\library  $library
    * @return \Illuminate\Http\Response
    */
   public function show(library $library)
   {
       return \view('pages.admin.library.show', ['item'=>$library]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\library  $library
    * @return \Illuminate\Http\Response
    */
   public function edit(library $library)
   {
       \config_set('theme.cdata', [
           'title' => 'Edit Library Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'library Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Edit Library Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'edit' => route(config('theme.cdata.route-name-prefix') . '.edit', $library->id),
           'update' => route(config('theme.cdata.route-name-prefix') . '.update', $library->id),
           'description' => 'Edit existing Library Information.'

       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));


       return \view('pages.admin.library.create_edit', ['item' => $library]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\library  $library
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, library $library)
   {
        $request->validate([
            'library_name' => 'required',
            'library_phone' => 'required'
        ]);
        $data = $request->all();
        $data['library_slug'] = Str::slug($request->library_name);
        $data['library_image'] = \upload_image($request, 'library_image', 'library', $library->library_image);
        $library->update($data);
        // flash message
        Session::flash('success', 'Successfully Updated Library Information .');
        return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\library  $library
    * @return \Illuminate\Http\Response
    */
   public function destroy(library $library)
   {
        if($library->books > 0){
            Session::flash('error', 'You can\'t delete this library.');
            return redirect()->back();
        }
        $library->delete();
        // flash message
        Session::flash('success', 'Successfully deleted Library Information.');
        return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }
}
