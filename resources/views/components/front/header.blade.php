<header id="header_section" class="bg-white">
    <div class="top-bar mx-auto">
        <div class="row p-2">
            <div class="col-md-3 pt-3">
                <h4 class="text-primary text-center"><b>ছদাহা ডিজিটাল লাইব্রেরি</b></h4>
            </div>
            <div class="col-md-6 pt-3">
                <form action="{{ route('home.search') }}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <input type="text" name="search" class="form-control" placeholder="এখানে বই খুঁজুন..." required>
                        <button class="default-btn">সাবমিট</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 py-3">
                <div class="d-flex justify-content-lg-end justify-content-center">

                    @guest
                        <a href="{{ route('home.registration') }}" class="default-outline-btn">রেজিষ্ট্রেশন</a>
                        <a href="/login" class="default-btn mx-1">লগইন</a>
                    @else
                    <x-logout class="default-outline-btn">লগআউট</x-logout>
                    <a href="/dashboard" class="default-btn mx-1">প্রোফাইল</a>
                    @endguest
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ front_asset('images/logo.png') }}" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">হোম</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.books') }}">বই সমূহ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.academic-books') }}">একাডেমিক বই</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.categories') }}">ক্যাটাগরি</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.about-us') }}">আমাদের সম্পর্কে</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.contact-us') }}">যোগাযোগ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
