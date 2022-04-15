<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
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
           'title' => 'Book Management table',
           'model' => 'Book',
           'route-name-prefix' => 'admin.book',
           'back' => \back_url(),
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Book Management Table',
                   'link' => false
               ],
           ],
           'add' => \route('admin.book.create')
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
           'description' => 'Display a listing of Book in Database.',
       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

    //    $collection = Book::cacheData();
       $collection = Book::all();
    //    dd($collection);

       return \view('pages.admin.book.index', \compact('collection'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       \config_set('theme.cdata', [
           'title' => 'Create New Book Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Book Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Create New Book Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'description' => 'Create new Book Information in a database.',
       ]);

       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       return \view('pages.admin.book.create_edit');
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
            'book_owner' => 'required',
            'book_owner_unique_id' => 'required',
            'book_owner_address' => 'required',
            'book_description' => 'required',
            'book_pages' => 'required',
            'book_publisher' => 'required',
            'book_address' => 'required',
            'book_map' => 'required',
            'book_status' => 'required',
            'category_id' => 'required',
            'writer_id' => 'required',
        ]);
        $data = $request->all();
        $data['book_slug'] = Str::slug($request->book_name);
        $data['book_created'] = date('d M Y');
        $data['book_image'] = \upload_image($request, 'book_image', 'book');
        $data['book_pdf'] = \upload_file($request, 'book_pdf', 'book');
        // dd($data);
        $book = Book::create($data);

        // flash message
        Session::flash('success', 'Successfully Stored New Book Information.');
        return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Book  $book
    * @return \Illuminate\Http\Response
    */
    public function show(Book $book)
    {
        return \view('pages.admin.book.show', ['item'=>$book]);
    }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Book  $book
    * @return \Illuminate\Http\Response
    */
   public function edit(Book $book)
   {
       \config_set('theme.cdata', [
           'title' => 'Edit Book Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Book Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Edit Book Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'edit' => route(config('theme.cdata.route-name-prefix') . '.edit', $book->id),
           'update' => route(config('theme.cdata.route-name-prefix') . '.update', $book->id),
           'description' => 'Edit existing Book Information.'

       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));


       return \view('pages.admin.book.create_edit', ['item' => $book]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Book  $book
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Book $book)
   {
        $request->validate([
            'book_name' => 'required',
            'book_owner' => 'required',
            'book_owner_unique_id' => 'required',
            'book_owner_address' => 'required',
            'book_description' => 'required',
            'book_pages' => 'required',
            'book_publisher' => 'required',
            'book_address' => 'required',
            'book_map' => 'required',
            'book_status' => 'required',
            'category_id' => 'required',
            'writer_id' => 'required',
        ]);
        $data = $request->all();
        $data['book_slug'] = Str::slug($request->book_name);
        $data['book_image'] = \upload_image($request, 'book_image', 'book', $book->book_image);
        $data['book_pdf'] = \upload_file($request, 'book_pdf', 'book', $book->book_pdf);
        $book->update($data);
        // flash message
        Session::flash('success', 'Successfully Updated Book Information .');
        return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Book  $book
    * @return \Illuminate\Http\Response
    */
    public function destroy(Book $book)
    {
        $book->delete();
        // flash message
        Session::flash('success', 'Successfully deleted Book Information.');
        return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
    }
}
