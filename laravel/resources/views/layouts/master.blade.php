<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::asset('web/Theme/default/Css/nav.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('web/Theme/default/Css/index.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('web/Theme/default/Css/bottom.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('web/Uploadify/uploadify.css')}}"/>
    <script type="text/javascript" src='{{URL::asset('web/Js/jquery-1.7.2.min.js')}}'></script>
    <script type="text/javascript" src='{{URL::asset('web/Js/nav.js')}}'></script>
    <script type="text/javascript" src='{{URL::asset('web/Uploadify/jquery.uploadify.min.js')}}'></script>
    <script type="text/javascript" src='{{URL::asset('web/Js/index.js')}}'></script>
    <script type='text/javascript'>
        var PUBLIC = '__PUBLIC__';
        var uploadUrl = '';
        var sid = '';
        var ROOT = '__ROOT__';
        var commentUrl = "";
        var getComment = '';
        var keepUrl = '';
        var delWeibo = '';
    </script>
    <script type='text/javascript'>
        var delFollow = "";
        var editStyle = "";
        var getMsgUrl = "";
    </script>
</head>
<body>
@include('layouts.nav')
@include('layouts.left')
@yield('content')
@include('layouts.right')
@include('layouts.bottom')
</body>
</html>