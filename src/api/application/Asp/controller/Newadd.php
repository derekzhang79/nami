<?php
namespace app\Asp\controller;

class Newadd extends \think\Controller
{
    public function index()
    {

//    	查询，实例化音乐模型
        $newadd_list=db('newadd')->select();
        return json($newadd_list);
    }



}
