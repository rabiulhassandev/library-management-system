<x-app-layout>
    <x-slot name="breadcrumb">
        <x-admin.breadcrumb>
            @foreach (config('theme.cdata.breadcrumb') as $i )
            <x-admin.bread-item href="{{ $i['link'] }}" class="{{ $i['link']?'':'active' }}">
                {{ $i['name'] }}
            </x-admin.bread-item>
            @endforeach
            <x-slot name="title">
                {{ config('theme.cdata.title') }}
            </x-slot>
        </x-admin.breadcrumb>
    </x-slot>

    <x-card class="container">
        <x-slot name="title">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <h4>
                        {{ config('theme.cdata.title') }}
                    </h4>
                </div>
                <div class="">
                    @if (config('theme.cdata.back'))
                    <a href="{{ config('theme.cdata.back') }}"
                        class="btn btn-info btn-rounded waves-effect waves-light">
                        <i class="ri-arrow-left-fill"></i> Back
                    </a>
                    @endif
                </div>
            </div>
        </x-slot>
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card p-1 shadow rounded-0 bg-primary">
                    <img src="{{ image_url($item->book_image) }}" class="w-100">
                </div>
            </div>
            <div class="col-md-8 mt-2">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="m-0 font-weight-400">Book Name: <b>{{ $item->book_name }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Category: <b>{{ $item->category->category_name }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Writer: <b>{{ $item->writer_name }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Library: <b>{{ $item->library_id == '' ? '' : $item->library->library_name }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Owner: <b>{{ $item->book_owner }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Owner Unique Id: <b>{{ $item->book_owner_unique_id }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Owner Address: <b>{{ $item->book_owner_address }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Pages: <b>{{ $item->book_pages }} Page</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Price: <b>{{ $item->book_price }} TK</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Publisher: <b>{{ $item->book_publisher }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Address: <b>{{ $item->book_address }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Map: <a href="{{ $item->book_map }}" class="btn btn-secondary btn-sm" target="_blank">Go To Map</a></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book PDF: <a href="{{ image_url($item->book_pdf) }}" class="btn btn-secondary btn-sm" target="_blank">Open PDF</a></p>
                        <hr>
                        <p class="m-0 font-weight-400">
                            Book Status:
                            <b>
                                @if ($item->status == 'Available')
                                    <span style="color: green">Available</span>
                                @else
                                    <span style="color: red">Not Available</span>
                                @endif
                            </b>
                        </p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Created: <b>{{ $item->book_created }}</b></p>
                    </div>
                </div>
            </div>
        </div>
    </x-card>
</x-app-layout>
