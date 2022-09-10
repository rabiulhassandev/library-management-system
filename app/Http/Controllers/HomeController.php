<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Slider;
use App\Models\Profile;
use App\Models\Category;
use App\Models\ContactUs;
use App\Models\Admin\Role;
use Illuminate\Support\Str;
use App\Models\AcademicBook;
use Illuminate\Http\Request;
use App\Models\BookTransition;
use App\Models\Admin\UserStatus;
use App\Models\Admin\PageBuilder;
use App\Models\Library;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
    * Middleware
    *
    *
    */
    public function __construct()
    {
        \config_set('theme.cdata', [
            'title' => 'ছদাহা ডিজিটাল লাইব্রেরি',
            'description' => 'ছদাহা ডিজিটাল লাইব্রেরি বইকে জনসাধারণের কাছে সহজলভ্য করে সমাজে পাঠক সৃষ্টি এবং নিয়মিত পাঠককে বইয়ের সংস্পর্শে থাকার সুযোগ করে দিয়ে মানসিক ইতিবাচক পরিবর্তনে বিশেষ ভূমিকা রাখবে। প্রকল্পটি কোন নির্দিষ্ট শ্রেণী, ধর্ম, বর্ণ কিংবা গোষ্ঠীর জন্য গৃহীত হয়নি, বরঞ্চ সর্বসাধারণের মাঝে বই পড়ার সুযোগ সৃষ্টি ও উদ্দীপনা ছড়িয়ে দেওয়ার প্রয়াস চালিয়ে যাবে। বই পাঠকের কাছে পৌঁছে দেওয়ার পাশাপাশি স্থায়ী ও বিশেষ পাঠাগারের মাধ্যমে জ্ঞান বিতরণের কাজকে এগিয়ে নিতে বিশেষ ভূমিকা রাখবে ছদাহা ডিজিটাল লাইব্রেরি।',
        ]);
    }


    // Home Page
    public function index()
    {
        $this->seo()->setTitle(config('theme.cdata.title'));
        $this->seo()->setDescription(\config('theme.cdata.description'));


        $collection['sliders'] = Slider::cacheData()->where('status', 'Active');
        $collection['books'] = DB::table('books')->limit(10)->get();
        $collection['categories'] = DB::table('categories')->limit(10)->get();
        $collection['profiles'] = Profile::cacheData();

        return \view('pages.front.home', \compact('collection'));
    }

    // Library Page
    public function libraries(Request $request)
    {
        $collection = Library::cacheData();
        return \view('pages.front.libraries', \compact('collection'));
    }

    // library Details Page
    public function libraryDetails(Library $library)
    {
        $books = Book::where('library_id', $library->id)->get();

        return \view('pages.front.library-details', ['item' => $library, 'books' => $books]);
    }

    // Books Page
    public function books(Request $request)
    {
        $collection = new Book();

        $collection = $collection->where(function ($collection) use ($request) {
            $collection->where('book_name', 'LIKE', "%{$request->search}%");
            $collection->orWhere('book_owner', 'LIKE', "%{$request->search}%");
            $collection->orWhere('book_owner_unique_id', 'LIKE', "%{$request->search}%");
            $collection->orWhere('book_description', 'LIKE', "%{$request->search}%");
            $collection->orWhere('book_publisher', 'LIKE', "%{$request->search}%");
            $collection->orWhere('book_address', 'LIKE', "%{$request->search}%");
        });
        $collection = $collection->get();
        return \view('pages.front.books', \compact('collection'));
    }


    // Book Details Page
    public function bookDetails(Book $book)
    {
        return \view('pages.front.book-details', ['item' => $book]);
    }

    // Academic Books Page
    public function academicBooks()
    {
        $collection = AcademicBook::cacheData();
        return \view('pages.front.academic-books', \compact('collection'));
    }

    // Book Details Page
    public function academicBooksDetails(AcademicBook $academicBook)
    {
        return \view('pages.front.academic-book-details', ['item' => $academicBook]);
    }

    // Book Request Page
    public function bookRequest(Book $book)
    {
        return \view('pages.front.book-request', ['item' => $book]);
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
        $collection['about-us'] = PageBuilder::cacheData()->where('slug', 'about-us');

        $collection['advisor-profiles'] = Profile::cacheData()->where('type', 'Advisor');
        $collection['mentor-profiles'] = Profile::cacheData()->where('type', 'Mentor');
        $collection['founder-profiles'] = Profile::cacheData()->where('type', 'Founder');
        $collection['volunteer-profiles'] = Profile::cacheData()->where('type', 'Volunteer');
        $collection['campus-representative-profiles'] = Profile::cacheData()->where('type', 'Campus Representative');

        return \view('pages.front.about-us', compact('collection'));
    }

    // Categories Page
    public function categories()
    {
        $collection = Category::cacheData();
        return \view('pages.front.categories', \compact('collection'));
    }

    // category Books Page
    public function categoryBooks(Category $category)
    {
        $collection = Book::cacheData()->where('category_id', $category->id);
        return \view('pages.front.books', \compact('collection'));
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


    // Book Request Send
    public function bookRequestSend(Book $book, Request $request){
        $data = $request->all();

        $request->validate([
            'book_duration' => 'required',
            'book_address' => 'required',
            'admin_delivery_area' => 'required',
        ]);
        $data['book_id'] = $book->id;
        $data['request_date'] = date('d M Y');
        $data['user_id'] = auth()->user()->id;
        $bookRequest = BookTransition::create($data);
        // flash message
        Session::flash('success', 'আপনার রিকুয়েস্ট সফল ভাবে পাঠানো হয়েছে। এডমিন যদি আপনার রিকুয়েস্ট এপ্রোভ করে তাহলে আপনি একটি মেইল পাবেন।');
        return \redirect()->route('home.book-details', $book->id);
    }


    public function search(Request $request){

        $request->validate([
            'search' => 'required',
        ]);

        $collection = Book::where('book_name','LIKE','%'.$request->search.'%')->get();

        return \redirect()->route('home.books', ['collection'=>$collection]);
    }

}
