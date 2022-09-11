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
        @isset($collection['advisor-profiles'])
        @if(count($collection['advisor-profiles']) > 0)
        <div class="container py-3">
            <h3 class="text-primary pb-2">এডভাইজার</h3>
            <div class="row">
                @foreach ($collection['advisor-profiles'] as $profile)
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="card member-card shadow py-3" style="border: 0px; border-top: 5px solid #079c86 ;">
                        <div class="card-body">
                            <img src="{{ image_url($profile->image) }}" alt="{{ $profile->name }}">
                            <div style="margin-top: -20px; padding-bottom: 20px;">
                                <a href="{{ route('home.profile-details', $profile->id) }}"><span class="bx bx-plus"></span></a>
                            </div>
                            <a href="{{ route('home.profile-details', $profile->id) }}"><h4>{{ $profile->name }}</h4></a>
                            <h6 class="m-0 text-secondary">{{ $profile->designation }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endisset
        {{-- advisor Cards --}}

        {{-- mentor Cards --}}
        @isset($collection['mentor-profiles'])
        @if(count($collection['mentor-profiles']) > 0)
        <div class="container py-3">
            <h3 class="text-primary pb-2">মেন্টর্স</h3>
            <div class="row">
                @foreach ($collection['mentor-profiles'] as $profile)
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="card member-card shadow py-3" style="border: 0px; border-top: 5px solid #079c86 ;">
                        <div class="card-body">
                            <img src="{{ image_url($profile->image) }}" alt="{{ $profile->name }}">
                            <div style="margin-top: -20px; padding-bottom: 20px;">
                                <a href="{{ route('home.profile-details', $profile->id) }}"><span class="bx bx-plus"></span></a>
                            </div>
                            <a href="{{ route('home.profile-details', $profile->id) }}"><h4>{{ $profile->name }}</h4></a>
                            <h6 class="m-0 text-secondary">{{ $profile->designation }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endisset
        {{-- mentor Cards --}}

        {{-- founder Cards --}}
        @isset($collection['founder-profiles'])
        @if(count($collection['founder-profiles']) > 0)
        <div class="container py-3">
            <h3 class="text-primary pb-2">এক্সিকিউটিভ প্যানেল</h3>
            <div class="row">
                @foreach ($collection['founder-profiles'] as $profile)
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="card member-card shadow py-3" style="border: 0px; border-top: 5px solid #079c86 ;">
                        <div class="card-body">
                            <img src="{{ image_url($profile->image) }}" alt="{{ $profile->name }}">
                            <div style="margin-top: -20px; padding-bottom: 20px;">
                                <a href="{{ route('home.profile-details', $profile->id) }}"><span class="bx bx-plus"></span></a>
                            </div>
                            <a href="{{ route('home.profile-details', $profile->id) }}"><h4>{{ $profile->name }}</h4></a>
                            <h6 class="m-0 text-secondary">{{ $profile->designation }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endisset
        {{-- founder Cards --}}

        {{-- volunteer Cards --}}
        @isset($collection['volunteer-profiles'])
        @if(count($collection['volunteer-profiles']) > 0)
        <div class="container py-3">
            <h3 class="text-primary pb-2">স্বেচ্ছাসেবী</h3>
            <div class="row">
                @foreach ($collection['volunteer-profiles'] as $profile)
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="card member-card shadow py-3" style="border: 0px; border-top: 5px solid #079c86 ;">
                        <div class="card-body">
                            <img src="{{ image_url($profile->image) }}" alt="{{ $profile->name }}">
                            <div style="margin-top: -20px; padding-bottom: 20px;">
                                <a href="{{ route('home.profile-details', $profile->id) }}"><span class="bx bx-plus"></span></a>
                            </div>
                            <a href="{{ route('home.profile-details', $profile->id) }}"><h4>{{ $profile->name }}</h4></a>
                            <h6 class="m-0 text-secondary">{{ $profile->designation }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endisset
        {{-- volunteer Cards --}}




        {{-- campus-member Cards --}}
        @isset($collection['campus-representative-profiles'])
        @if(count($collection['campus-representative-profiles']) > 0)
        <div class="container py-3">
            <h3 class="text-primary pb-2">ক্যাম্পাস প্রতিনিধি</h3>
            <div class="row">
                @foreach ($collection['campus-representative-profiles'] as $profile)
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="card member-card shadow py-3" style="border: 0px; border-top: 5px solid #079c86 ;">
                        <div class="card-body">
                            <img src="{{ image_url($profile->image) }}" alt="{{ $profile->name }}">
                            <div style="margin-top: -20px; padding-bottom: 20px;">
                                <a href="{{ route('home.profile-details', $profile->id) }}"><span class="bx bx-plus"></span></a>
                            </div>
                            <a href="{{ route('home.profile-details', $profile->id) }}"><h4>{{ $profile->name }}</h4></a>
                            <h6 class="m-0 text-secondary">{{ $profile->designation }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @endisset
        {{-- campus-member Cards --}}


    </section>
</x-front-layout>
