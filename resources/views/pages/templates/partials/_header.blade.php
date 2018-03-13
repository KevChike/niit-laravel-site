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
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="dLPYAhy3kIFGx7qqymyDaaV1m2lFXulJD5xDkLK56nY" />
    @yield('page_title')
    @yield('page_description')
    @yield('keywords')
    <meta name="author" content="{{ config('app.name') }}">
    <link rel="icon" href="/assets/img/icon.png">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="/assets/css/font-awesome.css" rel="stylesheet"> 
    <link href="/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"> 
    <link href="/assets/plugins/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    {{--  <link rel="stylesheet" href="/assets/plugins/flexslider/css/flexslider.css" type="text/css" media="all" property="" />
    <link href="/assets/plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet">  --}}
    @yield('style')
    <link href="/assets/css/style.css" type="text/css" rel="stylesheet" media="all">   
    <script src="/assets/plugins/jquery/jquery-2.2.3.min.js"></script>     
</head>
<body>
