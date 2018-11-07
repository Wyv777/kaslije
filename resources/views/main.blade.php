<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5SXQXQ9');</script>
        <!-- End Google Tag Manager -->

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
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SXQXQ9"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @yield('body')
    </body>
</html>

<script type="text/javascript" src="https://admin.vuebulma.com/"></script>
<script type="text/javascript" src="js/app.js"></script>
