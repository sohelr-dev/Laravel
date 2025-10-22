@props([
    'type'=>"button",
    'bg'=>'primary',
    'href'=>"#"
])
<a class="btn btn-{{ $bg }}" type="{{ $type }}" href="{{ $href }}">
    {{ $slot }}
</a>