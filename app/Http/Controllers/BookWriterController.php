<?php

namespace App\Http\Controllers;

use App\Models\BookWriter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookWriterController extends Controller
{
    /**
    * Middleware
    *
    *
    */
   public function __construct()
   {
       $this->middleware(['auth', 'permission:book_writer_management']);

       \config_set('theme.cdata', [
           'title' => 'Book Writer Management table',
           'model' => 'Book Writer',
           'route-name-prefix' => 'admin.book-writer',
           'back' => \back_url(),
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Book Writer Management Table',
                   'link' => false
               ],
           ],
           'add' => \route('admin.book-writer.create')
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
           'description' => 'Display a listing of Book Writer in Database.',
       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

    //    $collection = BookWriter::cacheData();
       $collection = BookWriter::all();
    //    dd($collection);

       return \view('pages.admin.book-writer.index', \compact('collection'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       \config_set('theme.cdata', [
           'title' => 'Create New Book Writer Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Book Writer Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Create New Book Writer Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'description' => 'Create new Book Writer Information in a database.',
       ]);

       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       return \view('pages.admin.book-writer.create_edit');
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
           'writer_name' => 'required|unique:book_writers,writer_name',
           'writer_description' => 'required'
       ]);
       $data = $request->all();
       $data['writer_slug'] = Str::slug($request->writer_name);
       $bookWriter = BookWriter::create($data);


       // flash message
       Session::flash('success', 'Successfully Stored New Book Writer Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\BookWriter  $bookWriter
    * @return \Illuminate\Http\Response
    */
   public function show(BookWriter $bookWriter)
   {
       return \abort(404);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\BookWriter  $bookWriter
    * @return \Illuminate\Http\Response
    */
   public function edit(BookWriter $bookWriter)
   {
       \config_set('theme.cdata', [
           'title' => 'Edit Book Writer Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'BookWriter Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Edit Book Writer Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'edit' => route(config('theme.cdata.route-name-prefix') . '.edit', $bookWriter->id),
           'update' => route(config('theme.cdata.route-name-prefix') . '.update', $bookWriter->id),
           'description' => 'Edit existing Book Writer Information.'

       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));


       return \view('pages.admin.book-writer.create_edit', ['item' => $bookWriter]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\BookWriter  $bookWriter
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, BookWriter $bookWriter)
   {
       $request->validate([
        'writer_name' => 'required',
        'writer_description' => 'required'
       ]);
       $data = $request->all();
       $data['writer_slug'] = Str::slug($request->writer_name);
       $bookWriter->update($data);
       // flash message
       Session::flash('success', 'Successfully Updated Book Writer Information .');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\BookWriter  $bookWriter
    * @return \Illuminate\Http\Response
    */
   public function destroy(BookWriter $bookWriter)
   {
       $bookWriter->delete();
       // flash message
       Session::flash('success', 'Successfully deleted Book Writer Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }
}
