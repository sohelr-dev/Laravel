@extends("layout.nav")

@section("title" ,"Trainees")

@section("content")
<div class="container mt-4">
     <div class="card">
          <div class="card-header text-center fw-bold">Trainess List</div>
          <div class="table-responsive">
               <table class="table table-hover table-striped">
                    <thead class="table-dark">
                         <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Country</th>
                              <th>Acitve</th>
                              <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($trainess as $item )
                         <tr>
                              <td>{{$item["name"]}}</td>
                              <td>{{$item["email"]}}</td>
                              <td>{{$item["country"]}}</td>
                              <td>
                                   @if ($item["is_active"])
                                   <span class="badge bg-success"> Active </span>
                                   @else
                                   <span class="badge bg-danger"> Inactive </span>  
                                   @endif
                                   </td>
     
                              <td>
                                   <a href="trainee/{{ $item['id'] }}" class="btn btn-primary">view</a>
                              </td>
                              
                         </tr>
                              
                         @endforeach
                    </tbody>
     
               </table>

          </div>

     </div>

</div>

@endsection