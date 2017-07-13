<?php
namespace app\pc\controller;
use think\Session;

class Index extends \think\Controller

{
    public function _initalize(){

    }

    public function index()
    {
        $this->navInfo();
        $user=Session::get('user_info');        
        // $goods_list=db('detail_format')->select();
        // $this->assign('goods_list',$goods_list);
        // print_r($goods_list);
        // exit();
        return $this->fetch();

    }

    public function cate()
    {
        $this->navInfo();
        return $this->fetch();
    }

    public function navInfo()
    {
        $userData=Session::get('user_info');
        if (Session::get('user_id')) {
            $user_id=Session::get('user_id');
            $this->assign('user_id',$user_id);
            //待支付数量
            $cartList= db('cart')->where("user_id=$user_id")->select();
            $this->assign('cartList',$cartList);
            $cartNum = 0;
            
            foreach ($cartList as $key => $value) {
                $cartNum += $value['num'];               
            }
            
            $this->assign('cartNum',$cartNum);
            // print_r($userData);
            // echo $userData['username'];
            // exit();
        }else {

        }
        $this->assign('userData',$userData);

    }
    
}
