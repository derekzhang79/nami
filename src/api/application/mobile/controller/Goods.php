<?php
namespace app\mobile\controller;

class Goods extends \think\Controller
{
	//查询所有商品列表
    public function index()
    {
    	$list = db('detail_format')->select();
        return json($list);
    }
    //获取单个信息
    public function read()
    {
    	$id = input('id');
    	$info = db('detail_format')->where("id=$id")->find();
        $goods_info = db('goods_attr')->where("goods_id=$id")->select();
        foreach($goods_info as $key => $value){
            $goods_color = db('color')->where("attr_id",$value['id'])->select();
            $goods_info[$key]['goods_color'] = $goods_color;
        }     
        $info['goods_info'] = $goods_info;
        return json($info);
    }
}
