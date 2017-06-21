<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @yield('page_title')
    @yield('page_description')
    @yield('keywords')
    <meta name="author" content="{{ config('app.name') }}">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="icon" href="/img/icon.ico">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet"> 
    <link href="/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"> 
    <link href="/plugins/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="/plugins/flexslider/css/flexslider.css" type="text/css" media="all" property="" />
    <link href="/plugins/owl-carousel/css/owl.carousel.css" rel="stylesheet">
    @yield('style')
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="all">   
    <script src="/plugins/jquery/jquery-2.2.3.min.js"></script>     
</head>
<body>