<!doctype html>
<html lang="en">
    <head>
        {{-- meta manager --}}
        <x-meta-manager />
        {{-- favicon --}}
        <x-favicon />
        {{-- style --}}
        <x-admin.styles />
   </head>
   <body class="sidebar-main-active right-column-fixed">
      <!-- loader Start -->
      {{-- <x-dashboard.loader/> --}}
      <!-- loader END -->

      <!-- Wrapper Start -->
      <div class="wrapper">

         <!-- Sidebar  -->
         <x-admin.left-sidebar />
        <!-- End Sidebar -->

         <!-- TOP Nav Bar -->
         <x-admin.header />
         <!-- TOP Nav Bar END -->

         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               {{ $slot }}
            </div>
         </div>
      </div>
      <!-- Wrapper END -->

       <!-- Footer -->
       <x-admin.footer />
        <!-- Footer END -->

        <!-- right side bar START -->
        <x-admin.right-sidebar />
        <!-- right side bar END -->

        <!-- start scripts -->
        <x-admin.scripts />
        <!-- end scripts -->
        <x-fb-live-chat />
        <x-toster-session />
        <x-delete />
        <x-google-translate />
   </body>

</html>
