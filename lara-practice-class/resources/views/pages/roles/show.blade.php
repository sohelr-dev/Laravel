@extends('layout.nav')

@section('title', 'Role Details')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white fw-bold">
            {{ $role['name'] }}'s Profile
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle mb-0">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $role['id'] }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $role['title'] }}</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
