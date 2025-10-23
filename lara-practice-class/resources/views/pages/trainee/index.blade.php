@extends("layout.nav")

@section("title" ,"Trainees")

@section("content")
<div class="container">
     <div class="card">
          <h2 class="ms-4">Trainess List</h2>
          <table class="table">
               <thead class="text-dark">
                    <tr>
                         <td>Name</td>
                         <td>Email</td>
                         <td>Country</td>
                         <td>Action</td>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($trainess as $item )
                    <tr>
                         <td>{{$item["name"]}}</td>
                         <td>{{$item["email"]}}</td>
                         <td>{{$item["country"]}}</td>
                         <td>
                              <a href="trainee/{{ $item['id'] }}" class="btn btn-primary">view</a>
                         </td>
                         
                    </tr>
                         
                    @endforeach
               </tbody>

          </table>
     </div>

</div>

@endsection