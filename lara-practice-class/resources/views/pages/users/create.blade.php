@extends("layout.nav")

@section("title" ,"User Create")

@section("content")
<div class="container mt-4">
     
     <h2>User Form</h2>
     <form action="{{ route("users.store") }}" method="post">
          @csrf
          <div class="row g-3">
               <div class="col-6">
                    <label for="firstName" class="form-label"> First Name</label>
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
                         @foreach ($roles as $item )
                         <option value="{{ $item['id'] }}"> {{$item['name']}}</option>
                              
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
                    
                    <button type="submit" class="btn btn-primary mt-4 ms-4">Submit</button>
               </div>
     
          </div>
     </form>

</div>

@endsection