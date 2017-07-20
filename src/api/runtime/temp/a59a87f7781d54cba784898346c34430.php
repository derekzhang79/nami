<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\singer\edit.html";i:1496630401;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\header.html";i:1496217773;s:99:"D:\wamp64\www\webPrj\vue-prj\my-project\src\api\public/../application/admin\view\public\footer.html";i:1496217782;}*/ ?>
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
<h2>编辑 <?php echo $singer_info['singer_name']; ?> 的歌手信息</h2>
<form action="<?php echo url('update',['id'=>$singer_info['id']]); ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="">歌手名称</label>
		<input type="text" class="form-control" placeholder="歌手名" name="singer_name" value="<?php echo $singer_info['singer_name']; ?>">
	</div>
	<div class="form-group">
		<label for="">其他名称</label>
		<input type="text" class="form-control" placeholder="歌手名" name="other_name" value="<?php echo $singer_info['other_name']; ?>">
	</div>
	<div class="form-group">
		<label for="">歌手分类</label>
		<select name="cate_id">
			<option>请选择</option>
			<?php foreach($cate_list as $value): ?>
			<option <?php if($singer_info['cate_id']==$value['id']): ?> selected <?php endif; ?> value="<?php echo $value['id']; ?>"><?php echo $value['tag']; ?>
			</option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="form-group">
		<label for="">上传头像</label>
		<input type="file" name="head_src">
	</div>
	<div class="form-group">
		<label for="">简介</label>
		<textarea class="form-control" name="about" style="margin: 0px -21px 0px 0px; width: 1162px; height: 176px;"><?php echo $singer_info['about']; ?></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">更新</button>
	</div>
</form>

</body>
</html>
