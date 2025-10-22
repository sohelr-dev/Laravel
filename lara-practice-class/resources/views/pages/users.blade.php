@extends("layout.nav")
{{--navbar e title e @yield("title") usekora ,shai title key dhore name use kora  search bar e name show --}}
@section("title" ,"User")

@section("content")
{{-- <h1 class="text-danger"> Name : {{$getId}}</h1> --}}
<h1 class="text-danger"> Name : {{$user}}</h1>
@if ($id)
     <h1 class="text-primary"> Your Profile Id : {{$id}}</h1>
@else
     <h1 class="text-danger">Id Not Found !</h1> 
@endif
@endsection