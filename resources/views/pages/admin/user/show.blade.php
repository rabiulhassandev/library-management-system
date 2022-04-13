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
            <div class="col-sm-12">
                <div class="card-content">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ $user->profile_photo_url }}" alt="profile-image" class="rounded-circle" style="width: 140px; height: 140px;">
                                        <div class="mt-3">
                                            <h4>{{ $user->name }}</h4>
                                            <p class="text-secondary mb-1">{!! get_user_role($user)->name??'<span class="badge badge-danger">User role not selected</span>' !!}</p>
                                            <p class="text-muted font-size-sm">{{ $user->bio }}</p>
                                            <a href="{{ route('admin.user.profile.settings', $user->id) }}" class="btn btn-primary mx-1 btn-sm"><i class="zmdi zmdi-edit"></i> Go To Settings
                                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary mx-1 btn-sm"><i class="zmdi zmdi-edit"></i> Update Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3 shadow">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="ri-global-line text-primary"></i> Website</h6>
                                        <small class="text-secondary">{{ $user->website }}</small>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="ri-facebook-circle-fill text-primary"></i> Facebook</h6>
                                        <small class="text-secondary">{{ $user->facebook }}</small>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="ri-twitter-fill text-primary"></i> Twitter</h6>
                                        <small class="text-secondary">{{ $user->twitter }}</small>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="ri-instagram-fill text-primary"></i> Instagram</h6>
                                        <small class="text-secondary">{{ $user->instagram }}</small>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="ri-linkedin-box-fill text-primary"></i> LinkedIn</h6>
                                        <small class="text-secondary">{{ $user->linkedin }}</small>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="ri-skype-fill text-primary"></i> Skype</h6>
                                        <small class="text-secondary">{{ $user->skype }}</small>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><i class="ri-github-fill text-primary"></i> Github</h6>
                                        <small class="text-secondary">{{ $user->github }}</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3 shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->name }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->email }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->phone }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">{{ $user->address }}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Profession</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">{{ $user->profession }}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Institute/workplace</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">{{ $user->institute_workplace }}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">NID/Birth C. No.</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">{{ $user->nid_or_birth_no }}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Status</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->status->name }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Account Created at</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $user->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-card>
</x-app-layout>
