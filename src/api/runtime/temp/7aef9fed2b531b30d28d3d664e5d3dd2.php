<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\wamp64\www\webPrj\xiaomi\api\public/../application/admin\view\category\add.html";i:1496751033;s:83:"D:\wamp64\www\webPrj\xiaomi\api\public/../application/admin\view\public\header.html";i:1496217773;s:83:"D:\wamp64\www\webPrj\xiaomi\api\public/../application/admin\view\public\footer.html";i:1496217782;}*/ ?>
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
<h2>添加商品表单</h2>
<form action="<?php echo url('save'); ?>" enctype="multipart/form-data" method="post">
	<div class="form-group">
		<label for="">商品名称</label>
		<input type="text" class="form-control" name="goods_name">
	</div>
	<div class="form-group">
		<label for="">所属分类</label>
		<select name="cate_id" >
			<option value="">请选择</option>
			<?php foreach($category_list as $item): ?>
			<option value="<?php echo $item['id']; ?>">
		    <?php if($item['parent_id'] > 0): ?>
			&nbsp;&nbsp;&nbsp;&nbsp;
			
			<?php endif; ?>
			<?php echo $item['cate_name']; ?> 
			</option>
			<?php endforeach; ?>

		</select>
	</div>
	<div class="form-group">
		<label for="">商品图片</label>
		<input type="file"  name="goods_thumb">
	</div>
	<div class="form-group">
		<label for="">商品简介</label>
		<textarea name="description" id=""  style="width: 1146px; height: 190px;"></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn-success btn" value="保存">
	</div>
</form>

</body>
</html>

