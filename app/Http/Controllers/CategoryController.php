<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{ /**
    * Middleware
    *
    *
    */
   public function __construct()
   {
       $this->middleware(['auth', 'permission:category_management']);

       \config_set('theme.cdata', [
           'title' => 'Category Management table',
           'model' => 'Category',
           'route-name-prefix' => 'admin.category',
           'back' => \back_url(),
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Category Management Table',
                   'link' => false
               ],
           ],
           'add' => \route('admin.category.create')
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
           'description' => 'Display a listing of Category in Database.',
       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

    //    $collection = Category::cacheData();
       $collection = Category::all();
    //    dd($collection);

       return \view('pages.admin.category.index', \compact('collection'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       \config_set('theme.cdata', [
           'title' => 'Create New Category Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Category Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Create New Category Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'description' => 'Create new Category Information in a database.',
       ]);

       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));

       return \view('pages.admin.category.create_edit');
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
           'category_name' => 'required|unique:categories,category_name',
           'category_description' => 'required'
       ]);
       $data = $request->all();
       $data['category_slug'] = Str::slug($request->category_name);
       $category = Category::create($data);


       // flash message
       Session::flash('success', 'Successfully Stored New Category Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function show(Category $category)
   {
       return \abort(404);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function edit(Category $category)
   {
       \config_set('theme.cdata', [
           'title' => 'Edit Category Information',
           'breadcrumb' => [
               [
                   'name' => 'Dashboard',
                   'link' => route('admin.dashboard')
               ],
               [
                   'name' => 'Category Table',
                   'link' => route(config('theme.cdata.route-name-prefix') . '.index')
               ],

               [
                   'name' => 'Edit Category Information',
                   'link' => false
               ],
           ],
           'add' => false,
           'edit' => route(config('theme.cdata.route-name-prefix') . '.edit', $category->id),
           'update' => route(config('theme.cdata.route-name-prefix') . '.update', $category->id),
           'description' => 'Edit existing Category Information.'

       ]);
       // seo
       $this->seo()->setTitle(config('theme.cdata.title'));
       $this->seo()->setDescription(\config('theme.cdata.description'));


       return \view('pages.admin.category.create_edit', ['item' => $category]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Category $category)
   {
       $request->validate([
        'category_name' => 'required',
        'category_description' => 'required'
       ]);
       $data = $request->all();
       $data['category_slug'] = Str::slug($request->category_name);
       $category->update($data);
       // flash message
       Session::flash('success', 'Successfully Updated Category Information .');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Category  $Category
    * @return \Illuminate\Http\Response
    */
   public function destroy(Category $Category)
   {
       $Category->delete();
       // flash message
       Session::flash('success', 'Successfully deleted Category Information.');
       return \redirect()->route(config('theme.cdata.route-name-prefix') . '.index');
   }
}
