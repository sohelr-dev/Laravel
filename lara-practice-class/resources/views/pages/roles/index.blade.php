@extends("layout.nav")

@section("title" ,"Roles")

@section("content")
<div class="container mt-4">
     <div class="card">
          <div class="card-header text-center fw-bold">Roles List</div>
          <div class="table-responsive">
               <table class="table table-hover table-striped">
                    <thead class="table-dark">
                         <tr>
                              <th>#Id</th>
                              <th>Title</th>
                              <th>Name</th>
                              <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($roles as $item )
                         <tr>
                              <td>{{$item["id"]}}</td>
                              <td>{{$item["title"]}}</td>
                              <td>{{$item["name"]}}</td>
                              <td>
                                   <a href="roles/role/{{ $item['id'] }}" class="btn btn-primary">view</a>
                              </td>  
                         </tr>
                              
                         @endforeach
                    </tbody>
     
               </table>

          </div>

     </div>

</div>

@endsection