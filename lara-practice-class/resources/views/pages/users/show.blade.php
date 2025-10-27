@extends('layout.nav')

@section('title', 'Users Details')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white fw-bold">
            {{ $user['first_name'] }}'s Profile
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle mb-0">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $user['userId'] }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $user['first_name'] }}</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>{{ $user['roleName'] }}</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
