@extends("layout.nav")

@section("title" ,"Users")

@section("content")
<div class="container mt-4">
     <div class="card">
          <div class="my-3  text-end">
               <a href="{{ route('users.create') }}" class="btn btn-primary">Add New</a>
          </div>
          <div class="card-header text-center fw-bold">Users List</div>
          @if (session('success'))
          <div class="alert alert-success" role="alert">
                {{ session('success') }}
          </div>
               
          @endif
          <div class="table-responsive">
               <table class="table table-hover table-striped">
                    <thead class="table-dark">
                         <tr>
                              <th>SL</th>
                              <th>id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Role Name</th>
                              <th class="text-center">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($users as $item )
                         <tr>
                              <td>{{$users->firstItem() + $loop->index}}</td>
                              <td>{{$item["userId"]}}</td>
                              <td>{{$item["first_name"]}}
                                   <span ><img src="{{ asset('storage/'.$item['photo']) }}" alt="" class="rounded" width="100" height="100"></span>
                              </td>
                              {{-- <td>
                                  {{ $item['photo'] }}
                              </td> --}}
                              <td>{{$item["email"]}}</td>
                              <td>{{$item["roleName"]}}</td>
     
                              <td class="text-center">
                                   <a href="users/user/{{ $item['userId'] }}" class="btn btn-primary">view</a>
                                   {{-- <form action="{{ route('users.edit',$item['userId']) }}" method="get">
                                        <input type="text" name="page" value="{{ request('page',1)]) }}">
                                        <button type="submit">edit1</button>
                                        
                                   </form> --}}
                                   <a href="{{ route('users.edit',['id'=>$item['userId'], 'page'=>request('page',1)]) }}" class="btn btn-secondary">edit</a>
                                   <form action="{{ route('user.destroy', $item['userId']) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete User">
                                             <i class="bi bi-trash"></i></i> Delete 
                                        </button>
                                   </form>
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