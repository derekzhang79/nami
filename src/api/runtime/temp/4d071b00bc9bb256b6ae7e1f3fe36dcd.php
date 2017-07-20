<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\wamp64\www\webPrj\xiaomi\api\public/../application/admin\view\goods\index.html";i:1496751828;s:83:"D:\wamp64\www\webPrj\xiaomi\api\public/../application/admin\view\public\header.html";i:1496217773;s:83:"D:\wamp64\www\webPrj\xiaomi\api\public/../application/admin\view\public\footer.html";i:1496217782;}*/ ?>
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
<h2>商品列表管理</h2>
<div class="row">
	<div class="col-lg-3">
		<a href="<?php echo url('add'); ?>" class="btn btn-success">添加商品</a>
		<a href="<?php echo url('category/index'); ?>" class="btn btn-success">分类列表</a>
	</div>
	<div class="col-lg-6 pull-right">
		<form action="<?php echo url('index'); ?>">
			商品名称：<input type="text" name="keyword" class="form-control" style="display: inline-block; width: 30%;"> 
			商品分类: <select name="category_id" id="category_box">
				<option value="">请选择</option>
			<?php foreach($category_list as $item): ?>
			<option value="<?php echo $item['id']; ?>">
			<?php echo $item['cate_name']; ?> 
			</option>
			<?php endforeach; ?>
			</select>		
			<input type="submit" id="sbt_info" class="btn btn-info" value="搜索"></form>
	</div>
</div>
<script type="text/javascript">
	$(function  () {
		$('#category_box').change(function  () {
			 $('#sbt_info').click();
		})
	})
</script>
<table class="table">
	<tr>
		<th>ID</th>
		<th>商品名称</th>
		<th>所属分类</th>
		<th>操作</th>
	</tr>
	<?php foreach($goods_list as $item): ?>
	<tr>
		<td><?php echo $item['id']; ?></td>
		<td><?php echo $item['goods_name']; ?></td>
		<td><?php echo $item['cate_name']; ?></td>

		<td>
			<a href='<?php echo url("edit",array("id"=>$item['id'])); ?>' class="btn btn-info">修改</a>
			<a href='<?php echo url("delete",array("id"=>$item['id'])); ?>' class="btn btn-danger">删除</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php echo $goods_list->render(); ?>
</body>
</html>
