<?php
namespace app\Asp\controller;

class Advert extends \think\Controller
{
    public function index()
    {

//    	查询，实例化音乐模型
        $advert_list=db('advert')->select();
      return json($advert_list);
    }



}
