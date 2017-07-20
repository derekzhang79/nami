<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:98:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\singer\index.html";i:1496676695;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\header.html";i:1496217773;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\footer.html";i:1496217782;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>音乐管理界面</title>
	 <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script  src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
<h2>歌手列表管理</h2>

<div class="row">
	<div class="col-md-4">
		<a href="<?php echo url('music/index'); ?>" class="btn btn-success">返回音乐列表</a>
		<a href="<?php echo url('add'); ?>" class="btn btn-success">添加歌手信息</a>
		<a href="<?php echo url('collect'); ?>" class="btn btn-info">采集歌手</a>
	</div>
	<div class="col-md-8">
		<form action="<?php echo url('index'); ?>" class="pull-right">
			<div class="form-group" style="display: inline-block;">
				<input type="text" class="form-control" placeholder="歌手名" name="keyword">
			</div>
			<div class="form-group" style="display: inline-block;">
				<button type="submit" class="btn btn-info" id="submit">搜索</button>
			</div>
		</form>
	</div>
</div>

<table class="table">
	<tr>
		<th>ID</th>
		<th>歌手名</th>
		<th>其他名</th>
		<th>头像</th>
		<th>操作</th>
	</tr>

	<?php foreach($singer_list as $value): ?>
	<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['singer_name']; ?></td>
		<td><?php echo $value['other_name']; ?></td>
		<td>
			<img src="<?php echo $value['head_src']; ?>" style="width:100px"></img>
		</td>
		<td>
			<a href="<?php echo url('song',['id'=>$value['id']]); ?>" class="btn btn-primary">歌曲</a>
			<a href="<?php echo url('edit',['id'=>$value['id']]); ?>" class="btn btn-info">编辑信息</a>
			<a href="<?php echo url('delete',['id'=>$value['id']]); ?>" class="btn btn-danger">删除歌曲</a>

		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php echo $singer_list->render(); ?>
</body>
</html>
