<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="/dashboard" class="header-logo">
          {{-- <img src="{{ admin_asset('images/logo.png') }}" class="img-fluid rounded-normal" alt=""> --}}
          <div class="logo-title">
             <span class="text-primary text-uppercase">ছদাহা ডিজিটাল লাইব্রেরি</span>
          </div>
       </a>
       <div class="iq-menu-bt-sidebar">
          <div class="iq-menu-bt align-self-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="las la-bars"></i></div>
             </div>
          </div>
       </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
            {{-- <li class="active">
               <a href="/dashboard"><span class="ripple rippleEffect"></span><i class="ri-home-7-line"></i><span>ড্যাশবোর্ড</span></a>
            </li>
             <li>
                <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-function-line"></i><span>ক্যাটাগরি</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="/dashboard/add-category"><i class="ri-add-box-line"></i>নতুন ক্যাটাগরি</a></li>
                   <li><a href="/dashboard/categories"><i class="ri-function-line"></i>ক্যাটাগরি লিস্ট</a></li>
                </ul>
             </li>
             <li>
                <a href="/dashboard/blank"><span class="ripple rippleEffect"></span><i class="ri-file-line"></i><span>খালি পেইজ</span></a>
             </li> --}}
                <x-admin-nav-link href="{{ route('admin.dashboard') }}">
                    <i class="ri-home-7-line"></i><span>ড্যাশবোর্ড</span>
                </x-admin-nav-link>

                @if (can('user_browse') or can('role_browse') or can('permission_browse'))
                {{--Users --}}

                <x-admin-nav-link-collapse title="User Managenemt">


                {{-- Users --}}
                @can('user_browse')
                <x-admin-nav-link href="{{ route('admin.user.index') }}">
                    <i class="far fa-address-book"></i>
                    <span></span>
                    <span>User Managment</span>
                </x-admin-nav-link>
                @endcan

                {{-- Role --}}
                @can('user_status_management')
                <x-admin-nav-link href="{{ route('admin.user-status.index') }}">
                    <i class="fas fa-users-cog"></i>
                    <span></span>
                    <span> User Status </span>
                </x-admin-nav-link>
                @endcan
                {{-- Role --}}
                @can('user_role_management')
                <x-admin-nav-link href="{{ route('admin.role.index') }}">
                    <i class="fas fa-users-cog"></i>
                    <span></span>
                    <span> Role </span>
                </x-admin-nav-link>
                @endcan
                {{-- Permission --}}
                @can('user_permission_management')
                <x-admin-nav-link href="{{ route('admin.permission.index') }}">
                    <i class="fas fa-user-shield"></i>
                    <span></span>
                    <span>Permission</span>
                </x-admin-nav-link>
                @endcan
                </x-admin-nav-link-collapse>
                @endif

                {{-----------------------------------------------------------
                ---------------- Portfolio Managment Start ---------------
                -------------------------------------------------------------}}
                @can('page_builder')
                <x-admin-nav-link href="{{ route('admin.page-builder.index') }}">
                    <i class="far fa-building"></i>
                    <span></span>
                    <span>Page Builder</span>
                </x-admin-nav-link>
                @endcan
                {{-----------------------------------------------------------
                ---------------- Portfolio Managment End ---------------
                -------------------------------------------------------------}}

                @can('report_issue_management')

                <x-admin-nav-link href="{{ route('admin.report-issue.index') }}">
                    <i class="fas fa-cogs"></i>
                    <span>Report Issue</span>
                    <span></span>
                </x-admin-nav-link>
                @endcan
                {{--Setting --}}
                @if(can('setting_management'))
                @endif
                @can('setting_management')
                <x-admin-nav-link href="{{ route('admin.settings.index') }}">
                    <i class="fas fa-cogs"></i>
                    <span>Setting</span>
                    <span></span>
                </x-admin-nav-link>
                @endcan
          </ul>
       </nav>
    </div>
 </div>
