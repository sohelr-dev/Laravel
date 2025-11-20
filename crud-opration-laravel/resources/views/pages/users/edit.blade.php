@extends("layout.nav")

@section("title" ,"User Edit")

@section("content")
<div class="container mt-4">
     
     <h2>User Form Edit</h2>
     <form action="{{ route("users.update",$user['id']) }}" method="post">
          @csrf
          @method("PATCH")
          <div class="row g-3">
               <input type="hidden" value="{{ $user['id'] }}">
               <input type="hidden" name="page" value="{{ $page }}">
               <div class="col-6">
                    <label for="firstName" class="form-label"> First Name</label>
                    <input type="text" name="first_name" value="{{ old('first_name') ?? $user['first_name'] }}" class="form-control">
                    @error('first_name')
                         <span class="text-danger">{{$message}}</span>
                    @enderror
               </div>
               <div class="col-6">
                    <label for="email" class="form-label"> Email</label>
                    <input type="text" name="email" value="{{ old('email') ?? $user['email'] }}" class="form-control">
                     @error('email')
                         <span class="text-danger">{{$message}}</span>
                    @enderror
               </div>
               <div class="col-6">
                    <label for="role_id" class="form-label"> Role</label>
                    <select name="role_id" class="form-select">
                         @php
                              $selected = old('role_id') ?? $user['role_id'];
                         @endphp
                         @foreach ($roles as $item )
                         
                         <option value="{{ $item['id'] }}" @selected( $selected == $item['id'])> {{$item['name']}}</option>
                              
                         @endforeach
                    </select>
               </div>
               
               <div class="col-6">
                    
                    <button type="submit" class="btn btn-primary mt-4 ms-4">Update</button>
               </div>
     
          </div>
     </form>

</div>

@endsection