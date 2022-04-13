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
                                <label for="category_name" class="font-weight-bold">Category Name</label>
                                <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter category name..."
                                    value="{{ isset($item)?$item->category_name:old('category_name') }}" required>
                                @error('category_name')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="category_description" class="font-weight-bold">Category Description</label>
                                <textarea name="category_description" class="form-control" placeholder="Write Category Description..." style="min-height: 120px;">{!! isset($item)?$item->category_description:old('category_description') !!}</textarea>
                                @error('category_description')
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
