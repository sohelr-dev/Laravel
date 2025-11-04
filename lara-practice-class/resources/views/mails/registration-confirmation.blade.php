<h1>WelCome ! You are Registiton Successfull</h1>

<h1>{{ $reg_data->first_name}} 's Profile Here </h1>

<p>Your Account  Details </p>
<ul>
     <li>Your Name : {{ $reg_data->first_name}}</li>
     <li>Your email : {{ $reg_data->email}}</li>
     <li>Your Role Type : {{ $reg_data->roleName}}</li>
</ul>