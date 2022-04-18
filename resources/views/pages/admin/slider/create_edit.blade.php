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
                                <label for="title" class="font-weight-bold">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title..."
                                    value="{{ isset($item)?$item->title:old('title') }}" required>
                                @error('title')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="status" class="font-black">Status</label>
                                <x-select2 name="status" class="form-control" required>
                                    <option value="Active">Active</option>
                                    <option value="Disabled" {{ isset($item)? $item->status == 'Disabled' ? 'selected' : '' : ''  }}>Disabled</option>
                                </x-select2>
                                @error('status')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 pt-1 pb-1">
                            <div class="form-group">
                                <label for="image" class="font-black">Slider Image</label>
                                <input type="file" class="form-control" name="image" id="image"
                                    onchange="get_img_url(this, '#image_image');"
                                    placeholder="select slider image" {{ isset($item) ? '' : 'required' }} accept="image/*">
                                <img id="image_image"
                                    src="{{ config('theme.cdata.edit')?image_url($item->image):'' }}" width="120px"
                                    class="mt-1">
                                @error('image')
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
