<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
        <meta name="title" content="{{ env('APP_NAME') }} @yield('title')" />
        <meta name="description" content="{{ env('META_DESCRIPTION') }}" />
        <meta name="keywords" content="{{ env('META_KEYWORD') }}" />
        <meta name="robots" content="index,follow" />
        <meta name="author" content="{{ env('AUTHOR') }}" />
        <meta name="creator" content="{{ env('AUTHOR') }}" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="google-site-verification" content="{{ env('GOOGLE_VERIFICATION') }}" />
        <meta name="theme-color" content="#000000"/>

        <title>@yield('title') - {{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css"> -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        
        @yield('style')
    </head>
    <body>
        @yield('body')
    </body>
</html>

<script type="text/javascript" src="https://admin.vuebulma.com/"></script>
<script type="text/javascript" src="js/app.js"></script>
