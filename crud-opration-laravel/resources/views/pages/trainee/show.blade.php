@extends('layout.nav')

@section('title', 'Trainees')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white fw-bold">
            {{ $trainee['name'] }}'s Profile
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle mb-0">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $trainee['id'] }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $trainee['name'] }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $trainee['email'] }}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{ $trainee['phone'] }}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{ $trainee['country'] }}</td>
                    </tr>
                    <tr>
                        <th>Active Status</th>
                        <td>
                            <span class="badge {{ $trainee['is_active'] ? 'bg-success' : 'bg-danger' }}">
                                {{ $trainee['is_active'] ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
