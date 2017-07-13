<?php
namespace app\Asp\controller;

class Goods extends \think\Controller
{
    public function index()
    {

//    	查询，实例化音乐模型


         $search_a["goods_name"]=array("like","%".input("keyword")."%");

        $goods_list=db('detail_format')
        			->where($search_a)
        			->select();
        return json($goods_list);

    }



}
