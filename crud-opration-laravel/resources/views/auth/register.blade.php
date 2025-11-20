@extends("layout.form")
@section('title', 'Registion')
@section('content')
<div class="col-lg-5 col-sm-8">
    <div class="card">
        <div class="card-body"> 
            <h2>User Form</h2>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-6">
                            <label for="firstName" class="form-label"> Name</label>
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control">
                            @error('first_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="col-6">
                            <label for="email" class="form-label"> Email</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    </div>
                    <div class="col-6">
                            <label for="password" class="form-label"> password</label>
                            <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-6">
                            <label for="ComfirmPassword" class="form-label"> Comfirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="col-6">
                            <label for="role_id" class="form-label"> Role</label>
                            <select name="role_id" class="form-select">
                                @php
                                    $selected =old('role_id');
                                @endphp
                                @foreach ($roles as $item )
                                <option value="{{ $item['id'] }}" @selected($item['id'] == $selected)> {{$item['name']}}</option>
                                    
                                @endforeach
                            </select>
                    </div>
                    <div class="col-12">
                            @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $item )
                                <li>{{$item}}</li>
                                    
                                @endforeach
                            </ul>

                            @endif

                    </div>
                    <div class="col-6">
                            
                            <button type="submit" class="btn btn-primary mt-4 ms-4">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
