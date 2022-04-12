<x-app-layout>


    <div class="row" id="dashboard-analytics">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card bg-primary text-white py-4">
                <div class="card-content">
                    <div class="card-body text-center">
                        <img src="https://kinoyeeexpress.com/admin-assets/images/elements/decore-left.png" alt="card-img-left" class="img-left"> <img src="https://kinoyeeexpress.com/admin-assets/images/elements/decore-right.png" alt="card-img-right" class="img-right">
                        <div class="avatar avatar-xl bg-primary shadow mt-0">
                            <div class="avatar-content"><i class="ri-award-line"></i></div>
                        </div>
                        <div class="text-center pt-2">
                            <h2 class="my-2 text-white">Welcome <span class="text-capitalize">Saiful Islam</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if( can('user_browse') or can('user_role_management') or
    can('user_permission_management') or can('user_status_management'))
    <section id="front-managment" class="py-5">
        <h4>User Mangment</h4>
        <hr>
        <div class="row justify-content-left">
            {{-- user status --}}
            @can('user_browse')
            <div class="col-xl-2 col-md-2 py-2">
                <a href="{{ route('admin.user.index') }}">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16">User</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="ri-user-line font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22 text-white">{{ $analytic['user']['user']??0 }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @foreach ($analytic['user']['status_data']??[] as $status)

            <div class="col-xl-2 col-md-2 py-2">
                <a href="{{ route('admin.user.index') }}">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16">{{ $status->name }}</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="ri-user-line font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22 text-white">{{ count($status->users)??0 }}</h5>
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
            <div class="col-xl-2 col-md-2 py-2">
                <a href="{{ route('admin.role.index') }}">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16">User Role</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="ri-user-line font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22 text-white">{{ $analytic['user']['role']??0 }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endcan
            {{-- user role End --}}
            {{-- user permission --}}
            @can('user_permission_management')
            <div class="col-xl-2 col-md-2 py-2">
                <a href="{{ route('admin.permission.index') }}">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-1">User Permission</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="ri-user-line font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22 text-white">{{ $analytic['user']['permission']??0 }}</h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endcan
            {{-- user permission End --}}

            {{-- user status --}}
            @can('user_status_management')
            <div class="col-xl-2 col-md-2 py-2">
                <a href="{{ route('admin.user-status.index') }}">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16">User Status</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-primary">
                                        <i class="ri-user-line font-size-20"></i>
                                    </span>
                                </div>
                                <h5 class="font-size-22 text-white">{{ $analytic['user']['status']??0 }}</h5>
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
