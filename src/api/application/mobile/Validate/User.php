<?php 
namespace app\mobile\validate;
use think\Validate;

class User extends Validate{
	protected $rule = [
		'username' => 'require|unique:user',
		'password' => 'require|length:6,12'
	];

	protected $message = [
		'username.require' => '用户名不能为空',
		'username.unique' => '用户名已注册',
		'password.require' => '歌词不能为空',
		'password.length' => '歌曲名称长度应在2到10个字符',
	];

}

 ?>