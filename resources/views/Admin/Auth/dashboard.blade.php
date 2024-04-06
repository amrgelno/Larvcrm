<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>

<style>

#users{

display:none;
}

#users:target{

display:block;
}


#Clients{

  display:none;
}

#Clients:target{

display:block;

}


#projects{

display:none;

}

#projects:target{

display:block;

}

iframe.iframe {
    margin-left: 19%;
}

</style>

<body onload='loading();'>
@if (!(auth::guard('user')->check()))

 {{--  without middleware checkdata
  auth->guard('user')==auth::guard('user')  --}}
  <ul>

<h1>  defaultDS  <h1>

<script>   alert('you must login first');                </script>

{{--  <li>   you must login first  </li>     --}}

<meta http-equiv='refresh'  content='2,url={{route("Admin.Login")}}' />

{{--  <meta http-equiv='refresh'  content='0,url=404page' />  --}}

@else

@extends('Admin.Auth.cmstheme')


@section('users')

@include('Admin.Auth.users')

@stop


@section('Clients')

@include('Admin.Auth.Client')

@stop



@section('projects')

@include('Admin.Auth.projects')

@stop

 @endif


 <!-- <h1> @yield ('static') </h1> -->

 
</body>
</html>


<script>

function  loading()   {



document.querySelector('.users').click();

}


</script>
