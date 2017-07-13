<?php
namespace app\Asp\controller;

class Daily extends \think\Controller
{
    public function index()
    {

//    	查询，实例化音乐模型
        $daily_list=db('daily')->select();
        return json($daily_list);
    }



}
