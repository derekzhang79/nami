<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\music\index.html";i:1496664151;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\header.html";i:1496217773;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\footer.html";i:1496217782;}*/ ?>
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
<h2>音乐列表管理</h2>
<div class="row">
	<div class="col-md-4">
		<a href="<?php echo url('add'); ?>" class="btn btn-success">添加音乐</a>
		<a href="<?php echo url('singer/index'); ?>" class="btn btn-success">歌手列表</a>
		<a href="<?php echo url('index/comic/index'); ?>" class="btn btn-success">浏览漫画api</a>
	</div>
	<div class="col-md-8">
		<form action="<?php echo url('index'); ?>" class="pull-right">
			<div class="form-group" style="display: inline-block;">
				<input type="text" class="form-control" placeholder="歌曲名" name="keyword">
			</div>
			<div class="form-group" style="display: inline-block;">
				<select name="singer_id" class="form-control" id="select">
					<option value="">请选择歌手</option>
					<?php foreach($singer_list as $value): ?>
					<option value="<?php echo $value['id']; ?>"><?php echo $value['singer_name']; ?></option>
					<?php endforeach; ?>
				</select>
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
		<th>歌曲名</th>
		<th>歌手名</th>
		<th>mp3</th>
		<th>热度</th>
		<th>操作</th>
	</tr>

	<?php foreach($music_list as $value): ?>
	<tr>
		<td><?php echo $value['id']; ?></td>
		<td style="width:250px;"><?php echo $value['music_name']; ?></td>
		<td><?php echo $value['singer_name']; ?></td>
		<td>
			<!-- <embed src="http://www.xiami.com/widget/0_<?php echo $value['xiami_id']; ?>/singlePlayer.swf" type="application/x-shockwave-flash" width="257" height="33" wmode="transparent"></embed> -->
			<audio src="<?php echo $value['music_src']; ?>" controls></audio>
		</td>
		<td>
			<?php echo $value['hot']; ?>
		</td>
		<td>
			<a href="<?php echo url('edit',['id'=>$value['id']]); ?>" class="btn btn-info">编辑信息</a>
			<a href="<?php echo url('delete',['id'=>$value['id']]); ?>" class="btn btn-danger">删除歌曲</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php echo $music_list->render(); ?>

<script>
	$('#select').change(function(){
		$("#submit").click();
	})
</script>
</body>
</html>
