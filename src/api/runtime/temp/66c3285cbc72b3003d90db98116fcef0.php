<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:96:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\music\edit.html";i:1496306133;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\header.html";i:1496217773;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\footer.html";i:1496217782;}*/ ?>
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
<h2>编辑 <?php echo $music_info['music_name']; ?> 的歌曲信息</h2>
<form action="<?php echo url('update',['id'=>$music_info['id']]); ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">歌曲名称</label>
		<input type="text" class="form-control" placeholder="歌曲名" name="music_name" value="<?php echo $music_info['music_name']; ?>">
	</div>
	<div class="form-group">
		<label for="">歌手名称</label>
		<select name="singer_id">
			<option>请选择</option>
			<?php foreach($singer_list as $value): ?>
			<option <?php if($music_info['singer_id']==$value['id']): ?> selected <?php endif; ?> value="<?php echo $value['id']; ?>"><?php echo $value['singer_name']; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label for="">上传文件</label>
		<input type="file" name="music_src">
	</div>
	<div class="form-group">
		<label for="">歌词</label>
		<textarea class="form-control" name="lrc" style="margin: 0px -21px 0px 0px; width: 1162px; height: 176px;"><?php echo $music_info['lrc']; ?></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">更新</button>
	</div>
</form>

</body>
</html>
