<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>       
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />


    <!-- Styles -->

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        


        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product<span class="caret">
              
          </span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('product.create') }}">Add Product</a></li>
            <li><a href="{{ route('product.index') }}">View Product</a></li>
            
          </ul>
        </li>


        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders<span class="caret">
              
          </span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('order.create') }}"> Create Order</a></li>
            <li><a href="{{ route('order.index') }}">View Order List</a></li>
            
          </ul>
        </li>

<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Customer<span class="caret">
              
          </span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('customer.create') }}">Add Customer</a></li>
            <li><a href="{{ route('customer.index') }}">View Customer</a></li>
            
          </ul>
 </li>

 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Role<span class="caret">
              
          </span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('role.create') }}">Create Role</a></li>
            <li><a href="{{ route('role.index') }}">View Role</a></li>
            
          </ul>
 </li>

 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Permission<span class="caret">
              
          </span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('permission.create') }}">Create Permission</a></li>
            <li><a href="{{ route('permission.index') }}">View Permission</a></li>
            
          </ul>
 </li>

  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Assign<span class="caret">
              
          </span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('assignpermission.create') }}">Assign Permission</a></li>
            <li><a href="{{ route('assignrole.create') }}">Assign Role</a></li>
            
          </ul>
 </li>


            @guest
             <li><a href="{{ route('login') }}">
                <span class="glyphicon glyphicon-log-in"></span> {{ __('Login') }}</a>
            </li>
            
            @if (Route::has('register'))
             <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> {{ __('Register') }}</a>
             </li>
       
            @endif
            @else
       
    


 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}<span class="caret">
              
          </span></a>
          <ul class="dropdown-menu">
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a></li>
           
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </li>
          </ul>
        </li>





          
          </ul>                   

                        
  @endguest

    </div>
  </div>
</nav>

 <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


 

