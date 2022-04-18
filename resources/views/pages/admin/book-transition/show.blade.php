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

            @can('book_request_reply')
            <div class="col-md-12 pt-3">
                <button class="btn btn-primary btn-lg" data-toggle="collapse" data-target="#admin_reply"><i class="ri-reply-line"></i> Reply</button>


                <div class="card shadow collapse border-0 mt-3" id="admin_reply">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-white">Admin Reply</h4>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data"
                    action="{{ config('theme.cdata.update') }}"
                    method="put" class="needs-validation" novalidate>
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group pt-1 pb-1">
                                        <label for="return_date" class="font-weight-bold">Return Date</label>
                                        <input type="date" class="form-control" name="return_date" id="return_date" placeholder="Enter delivery date..."
                                            value="{{ isset($item)?$item->return_date:old('return_date') }}" required>
                                        @error('return_date')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pt-1 pb-1">
                                        <label for="request_status" class="font-black"><b>Request Status</b></label>
                                        <select name="request_status" id="request_status" class="form-control" required>
                                            <option value="Pending">Pending</option>
                                            <option value="Approved" {{ isset($item)? $item->request_status == 'Approved' ? 'selected' : '' : ''  }}>Approved</option>
                                            <option value="Rejected" {{ isset($item)? $item->request_status == 'Rejected' ? 'selected' : '' : ''  }}>Rejected</option>
                                        </select>
                                        @error('request_status')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pt-1 pb-1">
                                        <label for="admin_reply_message" class="font-weight-bold">Reply Message</label>
                                        <textarea name="admin_reply_message" class="form-control" placeholder="Write Reply Message..." style="min-height: 120px;" required>{!! isset($item)?$item->admin_reply_message:old('admin_reply_message') !!}</textarea>
                                        @error('admin_reply_message')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group pt-1 pb-1">
                                        <label for="admin_delivery_area" class="font-weight-bold">Admin Delivery Address</label>
                                        <textarea name="admin_delivery_area" class="form-control" placeholder="Write Admin Delivery Address..." style="min-height: 120px;" required>{!! isset($item)?$item->admin_delivery_area:old('admin_delivery_area') !!}</textarea>
                                        @error('admin_delivery_area')
                                        <p class="text-danger pt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12 pt-1">
                                    <button class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </x-card>
</x-app-layout>
