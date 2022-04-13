<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="/dashboard" class="header-logo">
          {{-- <img src="{{ admin_asset('images/logo.png') }}" class="img-fluid rounded-normal" alt=""> --}}
          <div class="logo-title">
             <span class="text-primary text-uppercase">Online Library</span>
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
                <x-admin-nav-link href="{{ route('admin.dashboard') }}">
                    <i class="ri-home-7-line"></i><span>Dashboard</span>
                </x-admin-nav-link>

                @if (can('user_browse') or can('role_browse') or can('permission_browse'))
                {{--Users --}}

                <x-admin-nav-link-collapse title="User Managenemt" icon="ri-shield-user-line">


                {{-- Users --}}
                @can('user_browse')
                <x-admin-nav-link href="{{ route('admin.user.index') }}">
                    <i class="ri-user-line"></i>
                    <span></span>
                    <span>User Managment</span>
                </x-admin-nav-link>
                @endcan

                {{-- Role --}}
                @can('user_status_management')
                <x-admin-nav-link href="{{ route('admin.user-status.index') }}">
                    <i class="ri-user-settings-line"></i>
                    <span></span>
                    <span> User Status </span>
                </x-admin-nav-link>
                @endcan
                {{-- Role --}}
                @can('user_role_management')
                <x-admin-nav-link href="{{ route('admin.role.index') }}">
                    <i class="ri-user-5-line"></i>
                    <span></span>
                    <span> Role </span>
                </x-admin-nav-link>
                @endcan
                {{-- Permission --}}
                @can('user_permission_management')
                <x-admin-nav-link href="{{ route('admin.permission.index') }}">
                    <i class="ri-user-follow-line"></i>
                    <span></span>
                    <span>Permission</span>
                </x-admin-nav-link>
                @endcan
                </x-admin-nav-link-collapse>
                @endif

                {{-----------------------------------------------------------
                ---------------- Category Managment Start ---------------
                -------------------------------------------------------------}}
                @can('category_management')
                <x-admin-nav-link href="{{ route('admin.category.index') }}">
                    <i class="ri-function-line"></i>
                    <span></span>
                    <span>Category</span>
                </x-admin-nav-link>
                @endcan
                {{-----------------------------------------------------------
                ---------------- Category Managment End ---------------
                -------------------------------------------------------------}}


                {{-----------------------------------------------------------
                ---------------- Portfolio Managment Start ---------------
                -------------------------------------------------------------}}
                @can('page_builder')
                <x-admin-nav-link href="{{ route('admin.page-builder.index') }}">
                    <i class="ri-pages-line"></i>
                    <span></span>
                    <span>Page Builder</span>
                </x-admin-nav-link>
                @endcan
                {{-----------------------------------------------------------
                ---------------- Portfolio Managment End ---------------
                -------------------------------------------------------------}}

                @can('report_issue_management')

                <x-admin-nav-link href="{{ route('admin.report-issue.index') }}">
                    <i class="ri-file-chart-line"></i>
                    <span>Report Issue</span>
                    <span></span>
                </x-admin-nav-link>
                @endcan
                {{--Setting --}}
                @if(can('setting_management'))
                @endif
                @can('setting_management')
                <x-admin-nav-link href="{{ route('admin.settings.index') }}">
                    <i class="ri-settings-5-line"></i>
                    <span>Setting</span>
                    <span></span>
                </x-admin-nav-link>
                @endcan
          </ul>
       </nav>
    </div>
 </div>
