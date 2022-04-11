<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
       <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="iq-menu-bt d-flex align-items-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="las la-bars"></i></div>
             </div>
             <div class="iq-navbar-logo d-flex justify-content-between">
                <a href="index.html" class="header-logo">
                   {{-- <img src="{{ admin_asset('images/logo.png') }}" class="img-fluid rounded-normal" alt=""> --}}
                   <div class="logo-title">
                      <span class="text-primary text-uppercase">ছদাহা ডিজিটাল লাইব্রেরি</span>
                   </div>
                </a>
             </div>
          </div>
          <div class="navbar-breadcrumb">
             <h5 class="mb-0">পেইজ টাইটেল</h5>
             <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                   <li class="breadcrumb-item"><a href="/dashboard">ড্যাশবোর্ড</a></li>
                   <li class="breadcrumb-item active" aria-current="page">পেইজ টাইটেল</li>
                </ul>
             </nav>
          </div>
          <div class="iq-search-bar">
             <form action="#" class="searchbox">
                <input type="text" class="text search-input" placeholder="সার্চ করুন...">
                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
             </form>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
          <i class="ri-menu-3-line"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto navbar-list">
                <li class="nav-item nav-icon search-content">
                   <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                      <i class="ri-search-line"></i>
                   </a>
                   <form action="#" class="search-box p-0">
                      <input type="text" class="text search-input" placeholder="Type here to search...">
                      <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                   </form>
                </li>
                <li class="line-height pt-3">
                   <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                      <img src="{{ auth()->user()->profile_photo_url }}" class="img-fluid rounded-circle mr-3" alt="user">
                      <div class="caption">
                         <h6 class="mb-1 line-height">{{ auth()->user()->name }}</h6>
                         <p class="mb-0 text-primary">{{ get_user_role()->name }}</p>
                      </div>
                   </a>
                   <div class="iq-sub-dropdown iq-user-dropdown">
                      <div class="iq-card shadow-none m-0">
                         <div class="iq-card-body p-0 ">
                            <div class="bg-primary p-3">
                               <h5 class="mb-0 text-white line-height">স্বাগতম {{ auth()->user()->name }}</h5>
                               <span class="text-white font-size-12">সক্রিয় রয়েছেন</span>
                            </div>
                            <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                               <div class="media align-items-center">
                                  <div class="rounded iq-card-icon iq-bg-primary">
                                     <i class="ri-file-user-line"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                     <h6 class="mb-0 ">আপনার প্রোফাইল</h6>
                                     <p class="mb-0 font-size-12">আপনার ব্যাক্তিগত প্রোফাইল দেখুন</p>
                                  </div>
                               </div>
                            </a>
                            <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                               <div class="media align-items-center">
                                  <div class="rounded iq-card-icon iq-bg-primary">
                                     <i class="ri-profile-line"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                     <h6 class="mb-0 ">আপডেট প্রোফাইল</h6>
                                     <p class="mb-0 font-size-12">আপনার ব্যাক্তিগত প্রোফাইল আপডেট করুন</p>
                                  </div>
                               </div>
                            </a>
                            <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                               <div class="media align-items-center">
                                  <div class="rounded iq-card-icon iq-bg-primary">
                                     <i class="ri-account-box-line"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                     <h6 class="mb-0 ">একাউন্ট সেটিংস</h6>
                                     <p class="mb-0 font-size-12">আপনার একাউন্ট সেটিংস ম্যানেজ করুন</p>
                                  </div>
                               </div>
                            </a>
                            <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                               <div class="media align-items-center">
                                  <div class="rounded iq-card-icon iq-bg-primary">
                                     <i class="ri-lock-line"></i>
                                  </div>
                                  <div class="media-body ml-3">
                                     <h6 class="mb-0 ">প্রাইভেসি সেটিংস</h6>
                                     <p class="mb-0 font-size-12">আপনার প্রাইভেসি সেটিংস পরিচালনা করুন</p>
                                  </div>
                               </div>
                            </a>
                            <div class="d-inline-block w-100 text-center p-3">
                                <x-logout class="dropdown-item notify-item">
                                    <span class="dropdown-item text-danger">
                                        <i class="ri-login-box-line ml-2"></i>
                                        Logout
                                    </span>
                                    {{-- <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">লগআউট করুন<i class="ri-login-box-line ml-2"></i></a> --}}
                                </x-logout>
                            </div>
                         </div>
                      </div>
                   </div>
                </li>
             </ul>
          </div>
       </nav>
    </div>
 </div>
