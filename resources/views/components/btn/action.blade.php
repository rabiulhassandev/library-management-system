@props(['view'=>false,'edit'=>false,'delete'=>false])

@if ($view)
@if (isset($delete[1]) and can($delete[1]))
<a href="{{ $view[0] }}" class="btn btn-primary btn-circle waves-effect waves-light">
    <i class="ri-eye-fill"></i>
</a>
@else
<a href="{{ $view[0] }}" class="btn btn-primary btn-circle waves-effect waves-light">
    <i class="ri-eye-fill"></i>
</a>
@endif
@endif
@if ($edit)
@if (isset($delete[1]) and can($delete[1]))
<a href="{{ $edit[0] }}" class="btn btn-info btn-circle waves-effect waves-light">
    <i class="ri-pencil-line"></i>
</a>
@else
<a href="{{ $edit[0] }}" class="btn btn-info btn-circle waves-effect waves-light">
    <i class="ri-pencil-line"></i>
</a>
@endif
@endif
@if ($delete)

@if(isset($delete[1]) and can($delete[1]))
<button onclick="delete_action('{{ $delete[0] }}')" class="btn btn-danger btn-circle waves-effect waves-light">
    <i class="ri-delete-bin-6-line"></i>
</button>
@else
<button onclick="delete_action('{{ $delete[0] }}')" class="btn btn-danger btn-circle waves-effect waves-light">
    <i class="ri-delete-bin-6-line"></i>
</button>
@endif
@endif
