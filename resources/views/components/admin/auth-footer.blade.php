<footer {{ $attributes->merge(['class'=>'text-center']) }}>
    <x-visitor />

    <div>
        {{ date('Y') }} © {{ config('app.name') }}.
    </div>
    <div>
        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a {{ $attributes->merge(['class'=>'text-center']) }}
            href="http://callnsolution.com.bd/team.html"
            target="_blank">RABIUL HASSAN</a>
    </div>
    </div>
</footer>
