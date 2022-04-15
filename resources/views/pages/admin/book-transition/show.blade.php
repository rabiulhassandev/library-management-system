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
        <div class="row" style="padding: 50px 0">
            <div class="col-sm-12">

                <div class="card shadow">
                    <div class="card-body">
                        <p class="m-0 font-weight-400">
                            Book Name:
                            <b>
                                @if ($item->book_id != null)
                                    {{$item->book->book_name}}
                                @endif
                            </b>
                        </p>
                        <hr>
                        <p class="m-0 font-weight-400">
                            User Name:
                            <b>
                                @if ($item->user_id != null)
                                    {{$item->user->name}}
                                @endif
                            </b>
                        </p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Address: <b>{{ $item->book_address }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Duration: <b>{{ $item->book_duration }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Book Delivery Area: <b>{{ $item->book_delivary_area }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Request Date: <b>{{ $item->request_date }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">
                            Status:
                            @if ($item->status == 'Rejected')
                                <button class="btn btn-danger btn-sm">Rejected</button>
                            @elseif ($item->status == 'Approve')
                                <button class="btn btn-success btn-sm">Pending</button>
                            @else
                                <button class="btn btn-secondary btn-sm">Pending</button>
                            @endif
                        </p>
                        <hr>
                        <p class="m-0 font-weight-400">Return Date: <b>{{ $item->return_date }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Admin Reply: <b>{{ $item->admin_reply_message }}</b></p>
                        <hr>
                        <p class="m-0 font-weight-400">Admin Delivery Area: <b>{{ $item->admin_delivery_area }}</b></p>
                    </div>
                </div>

            </div>
        </div>
    </x-card>
</x-app-layout>
