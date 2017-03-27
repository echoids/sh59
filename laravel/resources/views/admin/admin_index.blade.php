@extends('layouts.List')
@section('tit','微博用户列表')
@section('table')
	<table class="table">
		<tr>
			<th>ID</th>
			<th>作者</th>
			<th>标题</th>
			<th>配图</th>
			<th>统计信息</th>
			<th>发布时间</th>
			<th>操作</th>

		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><ul>
					<li>转发：</li>
					<li>收藏：</li>
					<li>评论：</li>
				</ul></td>
			<td></td>
			<td></td>
		</tr>

@endsection