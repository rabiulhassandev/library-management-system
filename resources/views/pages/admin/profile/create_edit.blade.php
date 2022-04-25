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
                                <label for="name" class="font-weight-bold">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name..."
                                    value="{{ isset($item)?$item->name:old('name') }}" required>
                                @error('name')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="phone" class="font-weight-bold">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone..."
                                    value="{{ isset($item)?$item->phone:old('phone') }}" required>
                                @error('phone')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email..."
                                    value="{{ isset($item)?$item->email:old('email') }}" required>
                                @error('email')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="designation" class="font-weight-bold">Designation</label>
                                <input type="text" class="form-control" name="designation" id="designation" placeholder="Enter designation..."
                                    value="{{ isset($item)?$item->designation:old('designation') }}" required>
                                @error('designation')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="address" class="font-weight-bold">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter address..."
                                    value="{{ isset($item)?$item->address:old('address') }}">
                                @error('address')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="facebook" class="font-weight-bold">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter facebook..."
                                    value="{{ isset($item)?$item->facebook:old('facebook') }}" required>
                                @error('facebook')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="whatsApp" class="font-weight-bold">whatsApp</label>
                                <input type="text" class="form-control" name="whatsApp" id="whatsApp" placeholder="Enter whatsApp..."
                                    value="{{ isset($item)?$item->whatsApp:old('whatsApp') }}" required>
                                @error('whatsApp')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group pt-1 pb-1">
                                <label for="description" class="font-black">Description</label>
                                <textarea id="elm1" name="description">{!! isset($item)?$item->description:old('description') !!}</textarea>
                                @error('description')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group pt-1 pb-1">
                                <label for="type" class="font-black">Type</label>
                                <x-select2 name="type" class="form-control" required>
                                    <option value="Advisor">Advisor</option>
                                    <option value="Mentor" {{ isset($item)? $item->type == 'Mentor' ? 'selected' : '' : ''  }}>Mentor</option>
                                    <option value="Founder" {{ isset($item)? $item->type == 'Founder' ? 'selected' : '' : ''  }}>Founder</option>
                                    <option value="Volunteer" {{ isset($item)? $item->type == 'Volunteer' ? 'selected' : '' : ''  }}>Volunteer</option>
                                    <option value="Campus Representative" {{ isset($item)? $item->type == 'Campus Representative' ? 'selected' : '' : ''  }}>Campus Representative</option>
                                </x-select2>
                                @error('type')
                                <p class="text-danger pt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 pt-1 pb-1">
                            <div class="form-group">
                                <label for="image" class="font-black">Image</label>
                                <input type="file" class="form-control" name="image" id="image"
                                    onchange="get_img_url(this, '#image_image');"
                                    placeholder="select image" {{ isset($item) ? '' : 'required' }} accept="image/*">
                                <img id="image_image"
                                    src="{{ config('theme.cdata.edit')?image_url($item->image):'' }}" width="100px"
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
