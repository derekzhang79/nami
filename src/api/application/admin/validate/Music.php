<?php 
namespace app\admin\validate;
use think\Validate;

class Music extends Validate{
	protected $rule = [
		'music_name' => 'require|length:2,10|unique:music',
		'lrc' => 'require'
	];

	protected $message = [
		'music_name.require' => '歌曲名称不能为空',
		'music_name.length' => '歌曲名称长度应在2到10个字符',
		'music_name.unique' => '歌曲名称不能重复',
		'lrc.require' => '歌词不能为空'
	];

	protected $scene = [
		'edit' => ['music_name' => 'require|length:2,10','lrc' => 'require']
	];
}

 ?>