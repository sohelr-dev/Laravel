@props([
    'type'=>"button",
    'bg'=>'primary',
    'href'=>"#"
])

<button class="btn btn-{{ $bg }}" type="{{ $type }}">
    {{ $slot }}
</button>
<a class="btn btn-{{ $bg }}" type="{{ $type }}" href="{{ $href }}">
    {{ $slot }}
</a>