@php
    $id = "xyz" . rand(10, 100);
@endphp
<li>
    <a href="#{{ $id }}" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false">
        <span class="ripple rippleEffect"></span>
        <i class="ri-function-line"></i>
        <span>{{ $title }}</span>
        <i class="ri-arrow-right-s-line iq-arrow-right"></i>
    </a>
    <ul id="{{ $id }}" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
       {{ $slot }}
    </ul>
</li>
