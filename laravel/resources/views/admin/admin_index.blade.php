<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>微博列表</title>
	<link rel="stylesheet" href="{{URL::asset('admin/css/common.css')}}" />
	<script type="text/javascript" src='{{ URL::asset('admin/js/jquery-1.8.2.min.js') }}'></script>
	<script type="text/javascript" src='{{ URL::asset('admin/js/common.js') }}'></script>
</head>
<body>
	<div class='status'>
		<span>微博列表</span>
	</div>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>发布者</th>
			<th>微博标题</th>
			<th>配图</th>
			<th>统计信息</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
		<foreach name='weibo' item='v'>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>

				</td>
				<td><ul>
						<li>转发：</li>
						<li>收藏：</li>
						<li>评论：</li>
					</ul></td>
				<td>
					time
				</td>
				<td>

					<a href="{:U('delWeibo', array('id' => $v['id'], 'uid' => $v['uid']))}" class='del'></a>
				</td>
			</tr>
		</foreach>
		<tr>
			<td colspan='7' align='center' height='60'>{$page}</td>
		</tr>
	</table>
</body>
</html>