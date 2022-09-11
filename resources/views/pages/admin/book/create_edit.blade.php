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
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_name" class="font-weight-bold">Book Name</label>
                                <input type="text" class="form-control" name="book_name" id="book_name" placeholder="Enter book name..."
                                    value="{{ isset($item)?$item->book_name:old('book_name') }}" required>
                                @error('book_name')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_unique_id" class="font-weight-bold">Book Unique Id</label>
                                <input type="text" class="form-control" name="book_unique_id" id="book_unique_id" placeholder="Enter book unique id"
                                    value="{{ isset($item)?$item->book_unique_id:old('book_unique_id') }}" required>
                                @error('book_unique_id')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_pages" class="font-weight-bold">Book Pages</label>
                                <input type="number" class="form-control" name="book_pages" id="book_pages" placeholder="Enter book Pages (Number)"
                                    value="{{ isset($item)?$item->book_pages:old('book_pages') }}" required>
                                @error('book_pages')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_price" class="font-weight-bold">Book Price</label>
                                <input type="number" class="form-control" name="book_price" id="book_price" placeholder="Enter book Price (Number)"
                                    value="{{ isset($item)?$item->book_price:old('book_price') }}" required>
                                @error('book_price')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_address" class="font-weight-bold">Book Address</label>
                                <input type="text" class="form-control" name="book_address" id="book_address" placeholder="Enter book address..."
                                    value="{{ isset($item)?$item->book_address:old('book_address') }}">
                                @error('book_address')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_map" class="font-weight-bold">Book Map</label>
                                <input type="text" class="form-control" name="book_map" id="book_map" placeholder="Enter Book map..."
                                    value="{{ isset($item)?$item->book_map:old('book_map') }}">
                                @error('book_map')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_description" class="font-weight-bold">Book Description</label>
                                <textarea name="book_description" class="form-control" placeholder="Write Book Description..." style="min-height: 120px;">{!! isset($item)?$item->book_description:old('book_description') !!}</textarea>
                                @error('book_description')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_owner" class="font-weight-bold">Book Owner</label>
                                <input type="text" class="form-control" name="book_owner" id="book_owner" placeholder="Enter book owner name..."
                                    value="{{ isset($item)?$item->book_owner:old('book_owner') }}" required>
                                @error('book_owner')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_owner_unique_id" class="font-weight-bold">Book Owner Unique Id</label>
                                <input type="text" class="form-control" name="book_owner_unique_id" id="book_owner_unique_id" placeholder="Enter book owner unique id"
                                    value="{{ isset($item)?$item->book_owner_unique_id:old('book_owner_unique_id') }}" required>
                                @error('book_owner_unique_id')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_owner_address" class="font-weight-bold">Book Owner Address</label>
                                <input type="text" class="form-control" name="book_owner_address" id="book_owner_address" placeholder="Enter book owner address..."
                                    value="{{ isset($item)?$item->book_owner_address:old('book_owner_address') }}">
                                @error('book_owner_address')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_publisher" class="font-weight-bold">Book Publisher</label>
                                <input type="text" class="form-control" name="book_publisher" id="book_publisher" placeholder="Enter book Publisher"
                                    value="{{ isset($item)?$item->book_publisher:old('book_publisher') }}" required>
                                @error('book_publisher')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="category_id" class="font-black">Category</label>
                                <x-select2 name="category_id" class="form-control" required>
                                    <option value="">-- Select Category --</option>
                                    @foreach (App\Models\Category::cacheData() as $key=>$value)
                                    <option value="{{ $value->id }}" {{ selected($value->id,
                                        isset($item)?$item->category_id:old('category_id')) }}>
                                        {{ $value->category_name }}
                                    </option>
                                    @endforeach
                                </x-select2>
                                @error('category_id')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="writer_name" class="font-weight-bold">Book Writer</label>
                                <input type="text" class="form-control" name="writer_name" id="writer_name" placeholder="Enter Book Writer name..." value="{{ isset($item)?$item->writer_name:old('writer_name') }}">
                                @error('writer_name')
                                    <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="library_id" class="font-black">Library</label>
                                <x-select2 name="library_id" class="form-control">
                                    <option value="">Root</option>
                                    @foreach (App\Models\Library::cacheData() as $key=>$value)
                                    <option value="{{ $value->id }}" {{ selected($value->id,
                                        isset($item)?$item->library_id:old('library_id')) }}>
                                        {{ $value->library_name }}
                                    </option>
                                    @endforeach
                                </x-select2>
                                @error('library_id')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="book_status" class="font-black">Book Status</label>
                                <x-select2 name="book_status" class="form-control" required>
                                    <option value="Available">Available</option>
                                    <option value="Not Available" {{ isset($item)? $item->book_status == 'Not Available' ? 'selected' : '' : ''  }}>Not Available</option>
                                </x-select2>
                                @error('book_status')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 pt-1 pb-1">
                            <div class="form-group">
                                <label for="book_image" class="font-black">Book Image</label>
                                <input type="file" class="form-control" name="book_image" id="book_image"
                                    onchange="get_img_url(this, '#book_image_image');"
                                    placeholder="select book image" {{ isset($item) ? '' : 'required' }} accept="image/*">
                                <img id="book_image_image"
                                    src="{{ config('theme.cdata.edit')?image_url($item->book_image):'' }}" width="120px"
                                    class="mt-1">
                                @error('book_image')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 pt-1 pb-1">
                            <div class="form-group">
                                <label for="book_pdf" class="font-black">Book PDF</label>
                                <input type="file" class="form-control" name="book_pdf" id="book_pdf"
                                    placeholder="select book pdf" accept=".pdf,.PDF">

                                @if(config('theme.cdata.edit'))
                                    <a href="{{ config('theme.cdata.edit')?image_url($item->book_pdf):'' }}" class="btn btn-secondary btn-sm mt-2" target="_blank" accept="pdf">Go To PDF</a>
                                @endif

                                @error('book_pdf')
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
