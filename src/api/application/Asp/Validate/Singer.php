<?php 
namespace app\admin\validate;
use think\Validate;

class Singer extends Validate{
	protected $rule = [
		'singer_name' => 'require|length:2,10|unique:singer',
		'about' => 'require'
	];

	protected $message = [
		'singer_name.require' => '歌手名称不能为空',
		'singer_name.length' => '歌手名称长度应在2到10个字符',
		'singer_name.unique' => '歌手名称不能重复',
		'about.require' => '歌手简介不能为空'
	];

	protected $scene = [
		'edit' => ['singer_name' => 'require|length:2,10','lrc' => 'require']
	];
}

 ?>