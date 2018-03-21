<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115302358-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-115302358-1');
    </script>
    @yield('page_title')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @yield('page_description')
    @yield('keywords')
    <meta name="author" content="{{ config('app.name') }}">
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}">
    <meta name="theme-color" content="#2C394A"> 

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="dLPYAhy3kIFGx7qqymyDaaV1m2lFXulJD5xDkLK56nY" />
    
    {{-- bootstrap magic --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    
    {{-- theme custom --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css?version=1.0') }}" />

    {{-- mobile menu --}}
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css?version=1.0') }}" />

    @yield('style')
       

    {{-- fonts --}}
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}" />

    
    <style type="text/css">
        .navbar {
            margin-bottom: 0;
        }
    </style>
   
</head>
<body>
