<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>微博用户列表</title>
    <link rel="stylesheet" href="{{URL::asset('admin/css/common.css')}}" />
    <script type="text/javascript" src='{{ URL::asset('admin/js/jquery-1.8.2.min.js') }}'></script>
    <script type="text/javascript" src='{{ URL::asset('admin/js/common.js') }}'></script>
</head>
<body>
<div class='status'>
    <span>用户列表</span>
</div>
<table class="table">
    <tr>
        <th>ID</th>
        <th>用户</th>
        <th>微博数量</th>
        <th>手机号</th>
        <th>Email</th>
        <th>注册时间</th>
        <th>操作</th>
    </tr>
    <foreach name='weibo' item='v'>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>

            </td>
            <td></td>
            <td>
                time
            </td>
            <td></td>

        </tr>
    </foreach>
    <tr>
        <td colspan='7' align='center' height='60'>{$page}</td>
    </tr>
</table>
</body>
</html>