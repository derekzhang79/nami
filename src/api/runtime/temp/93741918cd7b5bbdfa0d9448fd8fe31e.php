<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\singer\song.html";i:1496664852;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\header.html";i:1496217773;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\footer.html";i:1496217782;}*/ ?>
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
<h2><?php echo $singer_info['singer_name']; ?> 的音乐</h2>
<p>
<img src="<?php echo $singer_info['head_src']; ?>" alt="" style="width:200px">
</p>
<a href="<?php echo url('index'); ?>" class="btn btn-success">返回歌手列表</a>
<a href="<?php echo url('music/add'); ?>" class="btn btn-success">添加音乐</a>
<a href="<?php echo url('collectMusic',['id'=>$singer_info['id']]); ?>" class="btn btn-info">采集音乐</a>

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
		<td><?php echo $singer_info['singer_name']; ?></td>
		<td>
			<!-- <embed src="http://www.xiami.com/widget/0_<?php echo $value['xiami_id']; ?>/singlePlayer.swf" type="application/x-shockwave-flash" width="257" height="33" wmode="transparent"></embed> -->
			<audio src="<?php echo $value['music_src']; ?>" controls></audio>
		</td>
		<td>
			<?php echo $value['hot']; ?>
		</td>
		<td>
			<a href="<?php echo url('music/edit',['id'=>$value['id']]); ?>" class="btn btn-info">编辑信息</a>
			<a href="<?php echo url('music/delete',['id'=>$value['id']]); ?>" class="btn btn-danger">删除歌曲</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>
