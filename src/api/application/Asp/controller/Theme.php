<?php
namespace app\Asp\controller;

class Theme extends \think\Controller
{
    public function index()
    {

//    	查询，实例化音乐模型
        $theme_list=db('theme')->select();
        return json($theme_list);
    }



}
