﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>HDWeiBo 后台管理中心</title>
	<link rel="stylesheet" href="{{ URL::asset('admin/css/index.css') }}" />
	<script type="text/javascript" src='{{ URL::asset('admin/js/jquery-1.8.2.min.js') }}'></script>
	<script type="text/javascript" src='{{ URL::asset('admin/js/index.js') }}'></script>
	<base target="iframe" />
</head>
<body>
	<div id="top">
		<div class='logo'></div>
		<div class='t_title'>后台管理中心</div>
		<div class='menu'>
			<ul>
				<li class='first first_cur'>
					<a href="{{url('admin/index/index1')}}"><span>首&nbsp;页</span></a>
				</li>
				<li class='next'>
					<a href="{{url('admin/index/user')}}"><span>用户列表</span></a>
				</li>
				<li>
					<a href="{{url('admin/index/info')}}"><span>微博列表</span></a>
				</li>
				<li class='last'>
					<a href=""><span>系统信息</span><div></div></a>
				</li>
			</ul>
			<div id='user'>
				<span class='user_state'>当前管理员：[<span></span>]权限为<span></span></span>
				<a href="" target='_self' id='login_out'></a>
			</div>
		</div>
	</div>
	<div id='left'>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">用户管理</span></div>
		</div>
		<ul class='option'>
			<li><a href="{{url('admin/index/user')}}">微博用户</a></li>
			<li><a href='{{url('admin/index/user_search')}}'>微博用户查询</a></li>
			<li><a href='{{url('admin/index/admin')}}'>后台管理员</a></li>

				<li><a href='{{url('admin/index/add_admin')}}'>添加管理员</a></li>

		</ul>

		<div class='nav'>
			<div class="nav_u"><span class="pos down">微博管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='{{url('admin/index/weibo')}}'>原作微博</a></li>
			<li><a href='{{url('admin/index/weibo_repeat')}}'>转发微博</a></li>
			<li><a href='{{url('admin/index/weibo_classify')}}'>微博分类</a></li>
			<li><a href='{{url('admin/index/weibo_search')}}'>微博检索</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">评论管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='{{url('admin/index/comment')}}'>评论列表</a></li>
			<li><a href='{{url('admin/index/comment_search')}}'>评论检索</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">系统设置</span></div>
		</div>
		<ul class='option'>
			<li><a href=''>关键字过滤</a></li>
			<li><a href=''>网站设置</a></li>
			<li><a href=''>修改密码</a></li>
		</ul>
	</div>
	<div id="right">
		<iframe src="{{url('admin/index/index1')}}" frameborder="0" name='iframe'>

		</iframe>
	</div>
</body>
</html>