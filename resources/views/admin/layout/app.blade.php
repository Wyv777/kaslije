<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
          </a>
      
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
                Product
            </a>
      
            <a class="navbar-item">
                Cateogry
            </a>

            <a class="navbar-item">
                Banner
            </a>

            <a class="navbar-item">
                Blog
            </a>
      
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div>
                    Hi, {{ Auth::user()->name }}
                </div>

                <div class="buttons">
                
                <a class="button is-light" href="/admin/logout">
                    Log out
                </a>
                </div>
            </div>
        </div>
        
    </nav>
    <div class="container">
        @yield('content')
    </div>

    <script type="text/javascript" src="https://admin.vuebulma.com/"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>