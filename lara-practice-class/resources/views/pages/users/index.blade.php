@extends("layout.nav")

@section("title" ,"Users")

@section("content")
<div class="container mt-4">
     <div class="card">
          <div class="card-header text-center fw-bold">Users List</div>
          <div class="table-responsive">
               <table class="table table-hover table-striped">
                    <thead class="table-dark">
                         <tr>
                              <th>id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Role Name</th>
                              <th>Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($users as $item )
                         <tr>
                              <td>{{$item["userId"]}}</td>
                              <td>{{$item["first_name"]}}</td>
                              <td>{{$item["email"]}}</td>
                              <td>{{$item["roleName"]}}</td>
     
                              <td>
                                   <a href="users/user/{{ $item['userId'] }}" class="btn btn-primary">view</a>
                              </td>
                              
                         </tr>
                              
                         @endforeach
                    </tbody>
                    <tfoot class="table-footer">
                         <tr>
                              <th colspan="5">
                                   {{-- {{ $users->links() }} --}}
                                   {{ $users->links('vendor.pagination.bootstrap-5') }}
                              </th>
                         </tr>
                    </tfoot>
     
               </table>

          </div>

     </div>

</div>

@endsection