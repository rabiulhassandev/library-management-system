<x-front-layout>
    <section id="book_request_page">

        @if (isset($collection->body))
        <div class="container py-3">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">আমাদের সম্পর্কে</h3>
                </div>
                <div class="card-body">
                        {{ $collection->body }}
                </div>
            </div>
        </div>
        @endif

        {{-- Cards --}}
        <div class="container py-3">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">সেচ্ছাসেবী সদস্য সমূহ</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                            <div class="card member-card shadow border-0">
                                <div class="card-body">
                                    <img src="https://sports-forum.com/wp-content/uploads/2019/11/Weston-Lowe-400-x-400.png">
                                    <h4>সাইফুল ইসলাম</h4>
                                    <h6 class="m-0 font-italic">সাধারণ সদস্য</h6>
                                    <small class="m-0">sayfulislam@gmail.com</small><br>
                                    <small class="m-0">০১৮৩২০২৯১৮২</small><br>
                                    <small>সাতকানিয়া, চট্টগ্রাম</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">সমস্য সমূহ</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                            <div class="card member-card shadow border-0">
                                <div class="card-body">
                                    <img src="https://sports-forum.com/wp-content/uploads/2019/11/Weston-Lowe-400-x-400.png">
                                    <h4>সাইফুল ইসলাম</h4>
                                    <h6 class="m-0 font-italic">সাধারণ সদস্য</h6>
                                    <small class="m-0">sayfulislam@gmail.com</small><br>
                                    <small class="m-0">০১৮৩২০২৯১৮২</small><br>
                                    <small>সাতকানিয়া, চট্টগ্রাম</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">সমস্য সমূহ</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                            <div class="card member-card shadow border-0">
                                <div class="card-body">
                                    <img src="https://sports-forum.com/wp-content/uploads/2019/11/Weston-Lowe-400-x-400.png">
                                    <h4>সাইফুল ইসলাম</h4>
                                    <h6 class="m-0 font-italic">সাধারণ সদস্য</h6>
                                    <small class="m-0">sayfulislam@gmail.com</small><br>
                                    <small class="m-0">০১৮৩২০২৯১৮২</small><br>
                                    <small>সাতকানিয়া, চট্টগ্রাম</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
