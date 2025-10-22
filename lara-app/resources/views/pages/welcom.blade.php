@extends("../layout/master")
@section('title', 'Welcome Page')
@section('content')
<div class="container">
    <h1>Welcome Page</h1>
    <x-alert>
        <p class="mb-0">Welcome to Laravel</p>
    </x-alert>
</div>
@endsection