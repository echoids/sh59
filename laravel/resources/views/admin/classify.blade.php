<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::asset('admin/css/common.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('admin/css/bootstrap.css')}}" />
    <script type="text/javascript" src='{{ URL::asset('admin/js/jquery-1.8.2.min.js') }}'></script>
    <script type="text/javascript" src='{{ URL::asset('admin/js/common.js') }}'></script>
</head>
<body>
<div class='status'>
    <span>@yield('classify')</span>
</div>
<div class="table-responsive">
@section('table')
    @show
</div>

</body>
</html>