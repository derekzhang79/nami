<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"D:\wamp64\www\webPrj\xiaomi\api\public/../application/admin\view\category\index.html";i:1496752061;s:83:"D:\wamp64\www\webPrj\xiaomi\api\public/../application/admin\view\public\header.html";i:1496217773;s:83:"D:\wamp64\www\webPrj\xiaomi\api\public/../application/admin\view\public\footer.html";i:1496217782;}*/ ?>
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
<h2>分类列表管理</h2>
<div class="row">
	<div class="col-lg-7">
		<a href="<?php echo url('goods/index'); ?>" class="btn btn-success">返回商品列表</a>
		<a href="<?php echo url('add'); ?>" class="btn btn-success">添加分类</a>
	</div>
	<div class="col-lg-5 pull-right">
		<form action="<?php echo url('index'); ?>">
			分类名称：<input type="text" name="keyword" class="form-control" style="display: inline-block; width: 30%;" placeholder="分类名"> 
			<input type="submit" id="sbt_info" class="btn btn-info" value="搜索"></form>
	</div>
</div>
<table class="table">
	<tr>
		<th>ID</th>
		<th>分类名称</th>
		<th>操作</th>
	</tr>
	<?php foreach($goods_list as $item): ?>
	<tr>
		<td><?php echo $item['id']; ?></td>
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
