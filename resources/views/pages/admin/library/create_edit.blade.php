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
                    <h4 class="text-capitalize">
                        {{ config('theme.cdata.title') }}
                    </h4>
                </div>
                <div class="text-capitalize">
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
                <form enctype="multipart/form-data"
                    action="{{ config('theme.cdata.edit')?config('theme.cdata.update'):config('theme.cdata.store') }}"
                    method="POST" class=" needs-validation" novalidate>
                    @csrf
                    @if(config('theme.cdata.edit'))
                    @method('PUT')
                    @endif


                    <div class=" row">
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="library_name" class="font-weight-bold">Library Name</label>
                                <input type="text" class="form-control" name="library_name" id="library_name" placeholder="Enter library name..."
                                    value="{{ isset($item)?$item->library_name:old('library_name') }}" required>
                                @error('library_name')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="library_phone" class="font-weight-bold">Library Phone</label>
                                <input type="text" class="form-control" name="library_phone" id="library_phone" placeholder="Enter library phone..."
                                    value="{{ isset($item)?$item->library_phone:old('library_phone') }}" required>
                                @error('library_phone')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="library_address" class="font-weight-bold">Library Address</label>
                                <input type="text" class="form-control" name="library_address" id="library_address" placeholder="Enter library address..."
                                    value="{{ isset($item)?$item->library_address:old('library_address') }}">
                                @error('library_address')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="library_map" class="font-weight-bold">Library Map</label>
                                <input type="text" class="form-control" name="library_map" id="library_map" placeholder="Enter library map..."
                                    value="{{ isset($item)?$item->library_map:old('library_map') }}">
                                @error('library_map')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="office_time" class="font-weight-bold">Office Time</label>
                                <input type="text" class="form-control" name="office_time" id="office_time" placeholder="Enter Office Time..."
                                    value="{{ isset($item)?$item->office_time:old('office_time') }}">
                                @error('office_time')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="library_description" class="font-weight-bold">Library Description</label>
                                <textarea name="library_description" class="form-control" placeholder="Write Library Description..." style="min-height: 120px;">{!! isset($item)?$item->library_description:old('library_description') !!}</textarea>
                                @error('library_description')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 pt-1 pb-1">
                            <div class="form-group">
                                <label for="library_image" class="font-black">Library Image</label>
                                <input type="file" class="form-control" name="library_image" id="library_image"
                                    onchange="get_img_url(this, '#library_image_image');"
                                    placeholder="select library image" {{ isset($item) ? '' : 'required' }} accept="image/*">
                                <img id="library_image_image"
                                    src="{{ config('theme.cdata.edit')?image_url($item->library_image):'' }}" width="120px"
                                    class="mt-1">
                                @error('library_image')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-12 ">
                            <div class="form-group pt-1 pb-1 text-left">
                                <button type="submit" class="btn btn-primary btn-lg btn-round">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-card>

    @push('lib-styles')
    <!-- Summernote css -->
    <link href="{{ admin_asset('libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css" />
    @endpush
    @push('extra-styles')

    @endpush
    @push('lib-scripts')
    <!--tinymce js-->
    <script src="{{ admin_asset('libs/tinymce/tinymce.min.js')}}"></script>

    <!-- Summernote js -->
    <script src="{{ admin_asset('libs/summernote/summernote-bs4.min.js')}}"></script>
    @endpush
    @push('extra-scripts')


    <!-- init js -->
    <script src="{{ admin_asset('js/pages/form-editor.init.min.js')}}"></script>
    @endpush
</x-app-layout>
