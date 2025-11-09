@extends("layout.nav")

@section("title" ,"Gallery Create")

@section("content")
<div class="container mt-4">
     
     <h2>Gallery Form</h2>
     @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
         
     @endif
     <form action="{{ route("gallery.store") }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row g-3">
               <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-image"></i></span>
                    <input type="file" class="form-control" name="image[]" placeholder="image" aria-label="image" aria-describedby="basic-addon1" multiple>
                     @error('image')
                         <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
               
               
               <div class="col-6">
                    
                    <button type="submit" class="btn btn-primary mt-4 ms-4">Submit</button>
               </div>
     
          </div>
     </form>

</div>

@endsection
