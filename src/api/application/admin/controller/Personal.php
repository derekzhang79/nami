<?php
namespace app\admin\controller;

class Personal extends  \think\Controller
{
	public function index()
	{
		return $this->fetch();
	}

	/*用户表信息*/
	public function user()
	{
		$user_list = db('user')->select();
		$this->assign('user_list',$user_list);
		return $this->fetch();
	}
	//订单信息
	public function order()
	{
		$order_list = db('order')->select();
		$this->assign('order_list',$order_list);
		return $this->fetch();
	}
	//购物车
	public function cart()
	{
		$cart_list = db('cart')->order("id desc")->select();
		$this->assign('cart_list',$cart_list);
		return $this->fetch();
	}

}