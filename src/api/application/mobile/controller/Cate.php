<?php
namespace app\mobile\controller;

class Cate extends \think\Controller
{
	/*全部类别*/
    public function index()
    {
    	$list = db('cate')->where('parent_id=0')->select();
        return json($list);
    }

    /*一个类别*/
    public function read()
    {
    	$id = input('id');
    	$info = db('cate')->where("id=$id")->find();
    	return json($info);
    }

    public function getCate(){
        // $cate_list = db('cate')->where('parent_id=0')->select();
        $cate_two_list = db('cate')
                        ->where('parent_id!=0')
                        ->order('parent_id asc')
                        ->select();

        foreach($cate_two_list as $key => $value){
            $goods_list = db('detail_format')
                            ->where('cate_id',$value['id'])
                            ->field('id,cate_id,goods_image,goods_name')
                            ->order('id desc')
                            ->select();
            $cate_two_list[$key]['goods_list'] = $goods_list;
        }
        // print_r($cate_two_list);exit();
        return json($cate_two_list);
    }
}
