<header id="header_section" class="bg-white">
    <div class="top-bar mx-auto">
        <div class="row">
            <div class="col-md-3 pt-3">
                <h5 class="text-primary"><b>ছদাহা <br> ডিজিটাল লাইব্রেরি</b></h5>
            </div>
            <div class="col-md-6 pt-3">
                <form action="#" method="POST">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <input type="text" class="form-control" placeholder="সার্চ করুন..." required>
                        <button class="default-btn">সাবমিট</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 py-3">
                <div class="d-flex justify-content-lg-end justify-content-center">
                    <a href="/registration" class="default-outline-btn">রেজিষ্ট্রেশন</a>
                    <a href="/login" class="default-btn mx-1">লগইন</a>
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
                        <a class="nav-link" href="/">হোম</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/books">বই সমূহ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/academic-books">একাডেমিক বই</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">ক্যাটাগরি</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">আমাদের সম্পর্কে</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">যোগাযোগ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
