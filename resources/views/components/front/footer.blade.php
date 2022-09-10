<section id="footer_section" style="background-color: #ffffff;" class="mt-4">
    <div class="container py-5 text-white">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ front_asset('images/footer-logo.png') }}" class="footer_logo">

                <p class="text-secondary pt-3 m-0" style="text-align: justify;">
                    ছদাহা ডিজিটাল  লাইব্রেরি বইকে জনসাধারণের কাছে সহজলভ্য করে সমাজে পাঠক সৃষ্টি এবং নিয়মিত পাঠককে বইয়ের সংস্পর্শে থাকার সুযোগ করে দিয়ে মানসিক ইতিবাচক পরিবর্তনে বিশেষ ভূমিকা রাখবে। প্রকল্পটি কোন নির্দিষ্ট শ্রেণী, ধর্ম, বর্ণ কিংবা গোষ্ঠীর জন্য গৃহীত হয়নি, বরঞ্চ সর্বসাধারণের মাঝে বই পড়ার সুযোগ সৃষ্টি ও উদ্দীপনা ছড়িয়ে দেওয়ার প্রয়াস চালিয়ে যাবে। বই পাঠকের কাছে পৌঁছে দেওয়ার পাশাপাশি স্থায়ী ও বিশেষ পাঠাগারের মাধ্যমে জ্ঞান বিতরণের কাজকে এগিয়ে নিতে বিশেষ ভূমিকা রাখবে 'ছদাহা ডিজিটাল লাইব্রেরি।
                </p>
                <p class="text-primary pt-1" style="text-align: justify;">
                    <b>ঠিকানা: ছাদাহা, সাতকানিয়া, চট্টগ্রাম।</b>
                </p>
                <div class="footer-social-icons">
                    <a href="https://www.facebook.com/chadahabd/" target="_blank"><i class='bx bxl-facebook-circle px-2 text-white bg-primary rounded py-2'></i></a>
                    <a href="#"><i class='bx bxl-twitter px-2 text-white bg-primary rounded py-2'></i></a>
                    <a href="#"><i class='bx bxl-instagram px-2 text-white bg-primary rounded py-2'></i></a>
                    <a href="https://youtube.com/channel/UCCma30AiVItxpeTWoPwLQvA" target="_blank"><i class='bx bxl-youtube px-2 text-white bg-primary rounded py-2'></i></a>
                </div>
            </div>
            <div class="col-md-2 pt-2">
                <h4 class="text-primary"><b>গুরুত্বপূর্ণ লিংক</b></h4>
                <div class="pt-3 list">
                    <a href="https://bloodboard.chadaha.com/" target="_blank">ব্লাড বোর্ড</a>
                    <a href="#" target="_blank">ছদাহা ফুড ব্যাংক</a>
                    <a href="#" target="_blank">হেলথ এইড</a>
                    <a href="#" target="_blank">লিগ্যাল এইড</a>
                    <a href="https://chadaha.com.bd/" target="_blank">ছদাহা.CoM</a>
                </div>
            </div>
            <div class="col-md-2 pt-2">
                <h4 class="text-primary"><b>পেজ সমূহ</b></h4>
                <div class="pt-3 list">
                    <a href="{{ route('home') }}" target="_blank">হোম</a>
                    <a href="{{ route('home.about-us') }}" target="_blank">আমমাদের সম্পর্কে</a>
                    <a href="{{ route('home.books') }}" target="_blank">বই সমূহ</a>
                    <a href="{{ route('home.academic-books') }}" target="_blank">একাডেমিক বই</a>
                    <a href="{{ route('home.contact-us') }}" target="_blank">যোগাযোগ</a>
                </div>
            </div>
            <div class="col-md-3 pt-2">
                <h4 class="text-primary"><b>ক্যাটাগরি</b></h4>
                <div class="pt-3">
                    @foreach (App\Models\Category::take(10)->get() as $cat)
                        <a href="{{ route('home.category-book', $cat->id) }}" class="btn btn-outline-secondary btn-sm m-1">{{ $cat->category_name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0 py-2" style="background-color: #c0bdbd;">
        <small class="m-0 text-center text-dark mx-auto d-block">Copyright 2022. All Right Reserved. Developed By <a href="http://rabiul.callnsolution.com.bd/" target="_blank" class="text-primary">RABIUL HASSAN</a></small>
    </div>
</section>
