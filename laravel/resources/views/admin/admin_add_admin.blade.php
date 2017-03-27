<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>微博用户列表</title>
    <link rel="stylesheet" href="{{URL::asset('admin/css/common.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('admin/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('css/zui.css')}}" />
    <script type="text/javascript" src='{{ URL::asset('admin/js/jquery-1.8.2.min.js') }}'></script>
    <script type="text/javascript" src='{{ URL::asset('admin/js/common.js') }}'></script>
</head>
<body>
<div class='status'>
    <span>添加管理员</span>
</div>

    <form class="form-inline" >
        <div align="center" >
            <div class="form-group" style="align:center">
                <label for="exampleInputName2">帐号</label>
                <input type="text" class="form-control" id="exampleInputName2" placeholder="请输入帐号"name="username" value="">
            </div>
            <br> <br>

            <div class="form-group">
                <label for="exampleInputEmail2" >密码</label>
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="请输入密码" name="password" value="">
            </div>
            <br> <br>
            <div class="dropdown open">
                <label for="exampleInputName2">权限</label><select>
                   <option>请选择</option>
                   <option>超级管理员</option>
                   <option>普通管理员</option>
               </select>
            </div>
            <br>
            <div> <label for="exampleInputName2">登录权限</label>
                <input type="radio" name="role" value="1">允许
                <input type="radio" name="role" value="1">禁止
            </div>
            <br>


            <button class="btn btn-primary " type="button">添加</button>
            <button class="btn btn-primary " type="button">取消</button>
        </div>

    </form>

</table>
</body>
</html>