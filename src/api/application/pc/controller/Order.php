<?php
namespace app\pc\controller;
use think\Session;

class Order extends \think\Controller
{
	public function index(){

		$cart_list = db('cart')->select();

		$this->assign('cart_list',json_encode($cart_list));

		print_r($cart_list);

		return $this->fetch();
	}

	/*-----获取购物车列表------*/
	public function cart(){

		$user_info = Session::get('user_info');
        $this->assign('user_info',$user_info);
		//得到绘画session的用户信息
		$uinfo = Session::get('user_info');	

		$this->assign('uinfo',json_encode($uinfo));

		

		$user_id= $uinfo['id'];


		$cart_list = db('cart')->where("user_id=$user_id")->select();

		$this->assign('cart_list',json_encode($cart_list));

		// print_r($cart_list);

		return $this->fetch();
	}
	/*-------订单------*/
	public function order(){
		

		$user_info = Session::get('user_info');
        $this->assign('user_info',$user_info);

		//通过绘画传递过来的用户id
		$user_id = Session::get('user_id');		
		$user_info = Session::get('user_info');

		// print_r($user_info['username']);
		// exit();

		$this->assign('user_info',$user_info);

		//一条记录是不能在视图层遍历（find）改选为select()
		$address=db('consignee')->where("user_id=$user_id")->select();

		$this->assign('address',$address);

		$buyList =  Session::get('buyList');

		//需要拿出来在 json_decode();  重点
		$listCart = json_decode($buyList,true);

		//print_r($listCart['1']);

		//php 中遍历数组  形式是重点
		$orderList=[];

		for($i=0; $i<count($listCart);$i++){

			$orderList[$i]=db('cart')->where("id=".$listCart[$i])->find();
			//print_r($orderList);
			
		}
		if (empty($orderList)) {
			return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;text-align: center;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 56px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>╭(╯^╰)╮才不让你进来呢</h1><p> 纳米手机市场 V5<br/><span style="font-size:30px">请先下单才可以访问订单详情(⊙o⊙)哦</span></p><span style="font-size:22px;">>>><a href="cart" target="qiniu">返回购物车
            </a> </span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
			
		}else{

			$this->assign('orderList',$orderList);
			//print_r($orderList);		
			return $this->fetch();
		}
		
		
	}

	/*---------确定订单------*/
	public function confirm(){
		$user_info = Session::get('user_info');
        $this->assign('user_info',$user_info);

		$order = Session::get('orderId');
		if ($order) {
			$orderId = json_decode($order);
			//print_r($orderId);

			$orderList = db('order')->where("id=$orderId")->find();
			$this->assign('orderList',$orderList);
		}else{
			return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;text-align: center;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 56px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>╭(╯^╰)╮才不让你进来呢</h1><p> 纳米手机市场 V5<br/><span style="font-size:30px">请先下单才可以访问订单详情(⊙o⊙)哦</span></p><span style="font-size:22px;">>>><a href="cart" target="qiniu">返回购物车
            </a> </span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
		}
		return $this->fetch();
	}
	public function userAjax()
	{
		//$user_id = input('user_id');
		$user_id = Session::get('user_id');

		$this->assign('user_id',$user_id);

		//print_r($user_id);
		return jsonp($user_id);

	}
	
	/*----点击按钮删除购物车------*/
	public function delete()
	{
		$id= input('id');
		$status=db('cart')->where("id=$id")->delete();
		return json(array($status));
	}

	
	/*--------更新替换------*/
	public function update()
	{
		/*$idList = input('idList');
		print_r($idList)*/
		$data  = input('data');
	 	// js 传过来的JSON字符串转换为数组
	 	$data_list = json_decode($data,true);

	 	$id_a = [];
	 	foreach ($data_list as $key => $value) {
	 		$id_a[]=$value['id'];
	 		db("cart")->where("id=".$value['id'])->update(array('num'=>$value['num']));
	 	}
		
		Session::set('buyList',json_encode($id_a));
		//$this ->assign('submitCart',json_encode($submitCart));

		//在ajax请求时使用-->json_encode

		//既是传状态也是传数组数据 
		//return json(array('status'=>1,'data'=>$submitCart));

		//（页面跳转）
		//return $this->fetch();
		//$this->success('添加成功','index');
	}

	/*保存订单信息 API  */
	public function orderAjax()
	{	

		$orderData=input('data');		

		$orderList = json_decode($orderData);
		//echo $orderData;s
		//print_r($orderList);
		$orderModel = model('order');

		$orderModel->save($orderList);

		$orderId = $orderModel->id;

		Session::set('orderId',json_encode($orderId));

		/*------点击立即下单删除购物车数据表*/	
		

		return json(array('status'=>1));

	}

}
	
