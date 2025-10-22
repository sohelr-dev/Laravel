@extends("../layout/master")
@section("title","About")
@section("content")
    @php
    $name = 'John';
    @endphp
    <div class="container">
        <h1 style="color: red">About Page</h1>
    <p>My name is <?php echo $name; ?></p>
    <p>My name is {{ $name }}</p>
    @for($i=1; $i<=5; $i++)
        <p>{{ $i }}</p>
    @endfor
    @php
        $day = "Saturday";
    @endphp
    @switch($day)
        @case('Saturday')
            <p>John</p>
            @break
        @case('Sunday')
            <p>Jane</p>
            @break
        @default
            <p>Default</p>
    @endswitch

    @if($name == 'John')
        <p>John</p>
        <hr>
        <p>new line</p>
        @if(true)
            <h2>true</h2>
        @endif
    @else
        <p>Not John</p>
    @endif
    </div>
@endsection