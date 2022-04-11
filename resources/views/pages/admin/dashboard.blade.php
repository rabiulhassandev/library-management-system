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

    <div class="row">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">
            {{-- clock --}}
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <div class="mr-5 mb-5 text-center">
                        <div class="card">
                            <div class="card-body">
                                <date-time-component />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @if( can('user_browse') or can('user_role_management') or
    can('user_permission_management') or can('user_status_management'))
    <section id="front-managment">
        <h4>User Mangment</h4>
        <hr>
        <div class="row justify-content-center">
            {{-- user status --}}
            @can('user_browse')
            <div class="col-xl-2 col-md-2">
                <a href="{{ route('admin.user.index') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16 text-dark">User</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="fas fa-user-ninja text-primary font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22">{{ $analytic['user']['user']??0 }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @foreach ($analytic['user']['status_data']??[] as $status)

            <div class="col-xl-2 col-md-2">
                <a href="{{ route('admin.user.index') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16 text-dark">{{ $status->name }}</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="fas fa-user-ninja text-primary font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22">{{ count($status->users)??0 }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endcan
            {{-- user status End --}}
            {{-- user role --}}
            @can('user_role_management')
            <div class="col-xl-2 col-md-2">
                <a href="{{ route('admin.role.index') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16 text-dark">User Role</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="fas fa-user-ninja text-primary font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22">{{ $analytic['user']['role']??0 }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endcan
            {{-- user role End --}}
            {{-- user permission --}}
            @can('user_permission_management')
            <div class="col-xl-2 col-md-2">
                <a href="{{ route('admin.permission.index') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16 text-dark">User Permission</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="fas fa-user-ninja text-primary font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22">{{ $analytic['user']['permission']??0 }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endcan
            {{-- user permission End --}}

            {{-- user status --}}
            @can('user_status_management')
            <div class="col-xl-2 col-md-2">
                <a href="{{ route('admin.user-status.index') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16 text-dark">User Status</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="fas fa-user-ninja text-primary font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22">{{ $analytic['user']['status']??0 }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endcan
            {{-- user status End --}}

        </div>
    </section>
    @endif




</x-app-layout>
