@extends("layout.nav")

@section("title" ,"Trainees")

@section("content")
<div class="container">
     <div class="card">
          <div class="card-header">{{$trainee['name']}} 's Profile</div>
          <div class="table-responsive">
               <table class="table">
                    <thead>
                         <tr>
                              <th>#id</th>
                              <td>{{$trainee['id']}}</td>
                         </tr>
                         <tr>
                              <th>Name</th>
                              <td>{{$trainee['name']}}</td>
                         </tr>
                         <tr>
                              <th>Email</th>
                              <td>{{$trainee['email']}}</td>
                         </tr>
                         <tr>
                              <th>Phone</th>
                              <td>{{$trainee['phone']}}</td>
                         </tr>
                         <tr>
                              <th>Country</th>
                              <td>{{$trainee['country']}}</td>
                         </tr>
                    </thead>
               
               </table>
          </div>

     </div>
</div>

@endsection