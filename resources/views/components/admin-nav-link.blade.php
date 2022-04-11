<li class="{{ $attributes['href'] && request()->url()==$attributes['href']?'active':'' }} text-capitalize ">
    <a href="{{ $attributes['href']??'javascript: void(0);' }}"><span class="ripple rippleEffect"></span>{{ $slot }}</a>
</li>
