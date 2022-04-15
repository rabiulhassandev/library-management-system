<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BookTransition;
use Illuminate\Support\Facades\Session;

class BookTransitionController extends Controller
{
    /**
    * Middleware
    *
    *
    */
   public function __construct()
   {
       $this->middleware(['auth', 'permission:book_transition_management']);

       \config_set('theme.cdata', [
           'title' => 'Book Transition Management table',
           'model' => 'Book Transition',
           'route-name-prefix' => 'admin.book-transition',
           'back' => \back_url(),
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Book Transition Management Table',
                   'link' => false
               ],
           ],
           'add' => \route('admin.book-transition.create')
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
           'description' => 'Display a listing of Book Transition in Database.',
       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       $collection = BookTransition::cacheData();
    //    $collection = BookTransition::all();
    //    dd($collection);

       return \view('pages.admin.book-transition.index', \compact('collection'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       \config_set('theme.cdata', [
           'title' => 'Create New Book Transition Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Book Transition Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Create New Book Transition Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'description' => 'Create new Book Transition Information in a database.',
       ]);

       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       return \view('pages.admin.book-transition.create_edit');
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
       ]);
       $data = $request->all();
       $data['writer_slug'] = Str::slug($request->writer_name);
       $bookTransition = BookTransition::create($data);


       // flash message
       Session::flash('success', 'Successfully Stored New Book Transition Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\BookTransition  $bookTransition
    * @return \Illuminate\Http\Response
    */
   public function show(BookTransition $bookTransition)
   {
        return \view('pages.admin.book-transition.show', ['item' => $bookTransition]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\BookTransition  $bookTransition
    * @return \Illuminate\Http\Response
    */
    public function edit(BookTransition $bookTransition)
    {
            \config_set('theme.cdata', [
                'title' => 'Edit Book Transition Information',
                'breadcrumb' => [
                    [
                        'name' => 'Dashboard',
                        'link' => route('admin.dashboard')
                    ],
                    [
                        'name' => 'BookTransition Table',
                        'link' => route(config('theme.cdata.route-name-prefix') . '.index')
                    ],

                    [
                        'name' => 'Edit Book Transition Information',
                        'link' => false
                    ],
                ],
                'add' => false,
                'edit' => route(config('theme.cdata.route-name-prefix') . '.edit', $bookTransition->id),
                'update' => route(config('theme.cdata.route-name-prefix') . '.update', $bookTransition->id),
                'description' => 'Edit existing Book Transition Information.'

            ]);
        // seo
        $this->seo()->setTitle(config('theme.cdata.title'));
        $this->seo()->setDescription(\config('theme.cdata.description'));


        return \view('pages.admin.book-transition.create_edit', ['item' => $bookTransition]);
    }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\BookTransition  $bookTransition
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, BookTransition $bookTransition)
   {
       $request->validate([
        'return_date' => 'required',
        'request_status' => 'required',
        'admin_reply_message' => 'required',
       ]);
       $data['return_date'] = $request->return_date;
       $data['request_status'] = $request->request_status;
       $data['admin_reply_message'] = $request->admin_reply_message;
       $data['admin_delivery_message'] = $request->admin_delivery_message;
       $bookTransition->update($data);
       // flash message
       Session::flash('success', 'Successfully Updated Book Transition Information .');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\BookTransition  $bookTransition
    * @return \Illuminate\Http\Response
    */
    public function destroy(BookTransition $bookTransition)
    {
        $bookTransition->delete();
        // flash message
        Session::flash('success', 'Successfully deleted Book Transition Information.');
        return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
    }
}

