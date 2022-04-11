@livewireStyles
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ admin_asset('css/bootstrap.min.css') }}">
<!-- Typography CSS -->
<link rel="stylesheet" href="{{ admin_asset('css/typography.css') }}">
<!-- font CSS -->
<link rel="stylesheet" href="{{ admin_asset('fonts/my-fonts/font.css') }}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ admin_asset('css/style.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ admin_asset('css/responsive.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ admin_asset('css/custom.css') }}">
<!-- sweetalert2 Css -->
<link rel="stylesheet" href="{{admin_asset('libs/sweet-alert2/sweetalert2.min.css')}}">
<!-- toastr Css -->
<link rel="stylesheet" href="{{admin_asset('libs/toastr/toastr.min.css')}}">

@stack('lib-styles')
<style>
    .swal2-confirm.btn.btn-primary {
        margin-right: 5px
    }

    .text-left {
        text-align: left !important;
    }
</style>
@stack('extra-styles')
