@extends("layout.nav")

{{--navbar e title e @yield("title") usekora ,shai title key dhore name use kora  search bar e name show --}}
@section("title" ,"Home")

@section('content')
<div class="container">
    <h1>Hello World</h1>
    <h1 class="text-primary">Hello <span class="text-dark fw-bold fs-2">{{ $title }}</span></h1>
    <h1>Your Country {{$country}}</h1>

    <x-button bg="danger">
        Click me:
    </x-button>
    <x-button type="submit">
        Submit
    </x-button>
    
    <div class="mt-2">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore doloremque officiis vero qui, amet voluptatum quam magni earum, modi ducimus esse ab itaque architecto dolorem.
        </p>
    </div>

</div>
<button class="btn btn-secondary" type="button">submit</button>
@endsection