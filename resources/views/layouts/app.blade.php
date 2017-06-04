<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Redesigned Couscous</title>

    <!-- Styles -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/gaintime.min.css') }}" rel="stylesheet">

</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
       <div class="navbar-header">
           <!-- Branding Image -->
           <a class="navbar-brand" href="{{ url('/') }}">
               redesigned-couscous
           </a>
       </div>

       <div class="dropdown-right">
           <!-- Left Side Of Navbar -->
            <span>Policial</span>
           <ul>
               <li>
                    <li><a href="{{ URL::action('UserController@create') }}"><i class="fa fa-btn fa-plus"></i>Registrar Novo</a></li>
               </li>
           </ul>
       </div>
    </nav>

    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @elseif (!empty(session('success')))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/gaintime.min.js') }}"></script>

    @yield('scripts')
</body>
</html>
