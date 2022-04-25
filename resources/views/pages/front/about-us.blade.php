<x-front-layout>
    <section id="book_request_page">

        @if (isset($collection['about-us']))
        <div class="container py-3 pt-5">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">আমাদের সম্পর্কে</h3>
                </div>
                <div class="card-body">
                    @foreach ($collection['about-us'] as $aboutUs)
                        {!! $aboutUs->body !!}
                    @endforeach
                </div>
            </div>
        </div>
        @endif


        {{-- advisor-profiles Cards --}}
        <div class="container py-3">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">এডভাইজার</h3>
                </div>
                <div class="card-body">
                    @isset($collection['advisor-profiles'])
                    @if(count($collection['advisor-profiles']) > 0)
                    <div class="row">
                        @foreach ($collection['advisor-profiles'] as $profile)
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                            <div class="card member-card shadow border-0">
                                <div class="card-body">
                                    <img src="{{ image_url($profile->image) }}">
                                    <h4>{{ $profile->name }}</h4>
                                    <h6 class="m-0 font-italic">{{ $profile->designation }}</h6>
                                    <small class="m-0">{{ $profile->email }}</small><br>
                                    <small class="m-0">{{ $profile->phone }}</small><br>
                                    <small>{{ $profile->address }}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="py-5 text-center">
                        <i class='bx bx-file-find text-secondary' style="font-size: 50px"></i>
                        <h3 class="text-primary m-0">কোনো তথ্য খুজে পাওয়া যায় নি</h3>
                    </div>
                    @endif
                    @endisset
                </div>
            </div>
        </div>
        {{-- advisor Cards --}}

        {{-- mentor Cards --}}
        <div class="container py-3">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">মেন্টর্স</h3>
                </div>
                <div class="card-body">
                    @isset($collection['mentor-profiles'])
                    @if(count($collection['mentor-profiles']) > 0)
                    <div class="row">
                        @foreach ($collection['mentor-profiles'] as $profile)
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                            <div class="card member-card shadow border-0">
                                <div class="card-body">
                                    <img src="{{ image_url($profile->image) }}">
                                    <h4>{{ $profile->name }}</h4>
                                    <h6 class="m-0 font-italic">{{ $profile->designation }}</h6>
                                    <small class="m-0">{{ $profile->email }}</small><br>
                                    <small class="m-0">{{ $profile->phone }}</small><br>
                                    <small>{{ $profile->address }}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="py-5 text-center">
                        <i class='bx bx-file-find text-secondary' style="font-size: 50px"></i>
                        <h3 class="text-primary m-0">কোনো তথ্য খুজে পাওয়া যায় নি</h3>
                    </div>
                    @endif
                    @endisset
                </div>
            </div>
        </div>
        {{-- mentor Cards --}}

        {{-- founder Cards --}}
        <div class="container py-3">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">ফাউন্ডার টিম</h3>
                </div>
                <div class="card-body">
                    @isset($collection['founder-profiles'])
                    @if(count($collection['founder-profiles']) > 0)
                    <div class="row">
                        @foreach ($collection['founder-profiles'] as $profile)
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                            <div class="card member-card shadow border-0">
                                <div class="card-body">
                                    <img src="{{ image_url($profile->image) }}">
                                    <h4>{{ $profile->name }}</h4>
                                    <h6 class="m-0 font-italic">{{ $profile->designation }}</h6>
                                    <small class="m-0">{{ $profile->email }}</small><br>
                                    <small class="m-0">{{ $profile->phone }}</small><br>
                                    <small>{{ $profile->address }}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="py-5 text-center">
                        <i class='bx bx-file-find text-secondary' style="font-size: 50px"></i>
                        <h3 class="text-primary m-0">কোনো তথ্য খুজে পাওয়া যায় নি</h3>
                    </div>
                    @endif
                    @endisset
                </div>
            </div>
        </div>
        {{-- founder Cards --}}

        {{-- volunteer Cards --}}
        <div class="container py-3">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">স্বেচ্ছাসেবী</h3>
                </div>
                <div class="card-body">
                    @isset($collection['volunteer-profiles'])
                    @if(count($collection['volunteer-profiles']) > 0)
                    <div class="row">
                        @foreach ($collection['volunteer-profiles'] as $profile)
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                            <div class="card member-card shadow border-0">
                                <div class="card-body">
                                    <img src="{{ image_url($profile->image) }}">
                                    <h4>{{ $profile->name }}</h4>
                                    <h6 class="m-0 font-italic">{{ $profile->designation }}</h6>
                                    <small class="m-0">{{ $profile->email }}</small><br>
                                    <small class="m-0">{{ $profile->phone }}</small><br>
                                    <small>{{ $profile->address }}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="py-5 text-center">
                        <i class='bx bx-file-find text-secondary' style="font-size: 50px"></i>
                        <h3 class="text-primary m-0">কোনো তথ্য খুজে পাওয়া যায় নি</h3>
                    </div>
                    @endif
                    @endisset
                </div>
            </div>
        </div>
        {{-- volunteer Cards --}}




        {{-- campus-member Cards --}}
        <div class="container py-3">
            <div class="card shadow border-0" style="border-radius: 0px;">
                <div class="card-header border-0 bg-primary">
                    <h3 class="text-white">ক্যাম্পাস প্রতিনিধি</h3>
                </div>
                <div class="card-body">
                    @isset($collection['campus-representative-profiles'])
                    @if(count($collection['campus-representative-profiles']) > 0)
                    <div class="row">
                        @foreach ($collection['campus-representative-profiles'] as $profile)
                        <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                            <div class="card member-card shadow border-0">
                                <div class="card-body">
                                    <img src="{{ image_url($profile->image) }}">
                                    <h4>{{ $profile->name }}</h4>
                                    <h6 class="m-0 font-italic">{{ $profile->designation }}</h6>
                                    <small class="m-0">{{ $profile->email }}</small><br>
                                    <small class="m-0">{{ $profile->phone }}</small><br>
                                    <small>{{ $profile->address }}</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="py-5 text-center">
                        <i class='bx bx-file-find text-secondary' style="font-size: 50px"></i>
                        <h3 class="text-primary m-0">কোনো তথ্য খুজে পাওয়া যায় নি</h3>
                    </div>
                    @endif
                    @endisset
                </div>
            </div>
        </div>
        {{-- campus-member Cards --}}


    </section>
</x-front-layout>
