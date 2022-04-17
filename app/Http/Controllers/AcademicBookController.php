<?php

namespace App\Http\Controllers;

use App\Models\AcademicBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AcademicBookController extends Controller
{
    /**
    * Middleware
    *
    *
    */
   public function __construct()
   {
       $this->middleware(['auth', 'permission:academic_books_management']);

       \config_set('theme.cdata', [
           'title' => 'Academic Book Management table',
           'model' => 'Academic Book',
           'route-name-prefix' => 'admin.academic-book',
           'back' => \back_url(),
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Academic Book Management Table',
                   'link' => false
               ],
           ],
           'add' => \route('admin.academic-book.create')
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
           'description' => 'Display a listing of Academic Book in Database.',
       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       $collection = AcademicBook::cacheData();
    //    $collection = AcademicBook::all();
    //    dd($collection);

       return \view('pages.admin.academic-book.index', \compact('collection'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       \config_set('theme.cdata', [
           'title' => 'Create New Academic Book Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Academic Book Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Create New Academic Book Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'description' => 'Create new Academic Book Information in a database.',
       ]);

       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       return \view('pages.admin.academic-book.create_edit');
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
           'book_name' => 'required',
           'class_name' => 'required',
           'owner_name' => 'required',
           'description' => 'required',
           'status' => 'required',
       ]);
       $data = $request->all();
       $data['created'] = date('d M Y');
       $data['image'] = \upload_image($request, 'image', 'academic-books');
       $academicBook = AcademicBook::create($data);


       // flash message
       Session::flash('success', 'Successfully Stored New Academic Book Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\AcademicBook  $academicBook
    * @return \Illuminate\Http\Response
    */
   public function show(AcademicBook $academicBook)
   {
       return \view('pages.admin.academic-book.show', ['item' => $academicBook]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\AcademicBook  $academicBook
    * @return \Illuminate\Http\Response
    */
   public function edit(AcademicBook $academicBook)
   {
       \config_set('theme.cdata', [
           'title' => 'Edit Academic Book Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'AcademicBook Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Edit Academic Book Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'edit' => route(config('theme.cdata.route-name-prefix') . '.edit', $academicBook->id),
           'update' => route(config('theme.cdata.route-name-prefix') . '.update', $academicBook->id),
           'description' => 'Edit existing Academic Book Information.'

       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));


       return \view('pages.admin.academic-book.create_edit', ['item' => $academicBook]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\AcademicBook  $academicBook
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, AcademicBook $academicBook)
   {
        $request->validate([
            'book_name' => 'required',
            'class_name' => 'required',
            'owner_name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);
       $data = $request->all();
       $data['image'] = \upload_image($request, 'image', 'academic-books', $academicBook->image);
       $academicBook->update($data);
       // flash message
       Session::flash('success', 'Successfully Updated Academic Book Information .');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\AcademicBook  $academicBook
    * @return \Illuminate\Http\Response
    */
   public function destroy(AcademicBook $academicBook)
   {
       $academicBook->delete();
       // flash message
       Session::flash('success', 'Successfully deleted Academic Book Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }
}
