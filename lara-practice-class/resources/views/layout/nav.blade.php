<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield("title")</title>
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <form class="d-flex" role="search">
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                         <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>    
               </ul>
               <ul class="navbar-nav mb-2 mb-lg-0 ">
                     <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                         {{-- for name use security perpas --}}
                         <a class="nav-link" href="{{ route('traine.index') }}">Trainee</a>
                         {{-- <a class="nav-link" href="/trainees">Trainee</a> --}}
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="{{ route('roles.index') }}">Role</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="{{ route("users.index") }}">Users</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item dropdown" >
                         <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Dropdown
                         </a>
                         <ul class="dropdown-menu" style="left: -70px">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                         </ul>
                    </li>
               </ul>
               
          </div>
          </div>
     </nav>
     @yield("content")

     <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
     <script>
          var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
          var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
          });
     </script>
</body>
</html>