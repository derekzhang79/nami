<?php 
	namespace app\mobile\controller;

	class Order extends \think\Controller{

		public function index(){
			$user_id = input('id');
			$order = db('order')
					->field('id,goods_num,total_price,date,status,sn')
					->where("user_id=$user_id")
					->order('date desc')
					->select();

			foreach ($order as $key => $value) {
				$order_goods = db('order_goods')->where("order_id=".$value['id'])->select();

				$order[$key]['goods']=$order_goods;
				if($value['status']==0){
					$order[$key]['status']='待付款';
				}elseif($value['status']==1){
					$order[$key]['status']='待收货';
				}elseif($value['status']==2){
					$order[$key]['status']='已收货';
				}elseif($value['status']==3){
					$order[$key]['status']='已完成';
				}
				$order[$key]['date']=date("Y-m-d H:i",$value['date']);
			}
			// print_r($order);exit();
				return jsonp($order);
		}

		public function detail(){
			$order_id = input('id');
			$order = db('order')
					->where("id=$order_id")
					->find();

				$order_goods = db('order_goods')->where("order_id=".$order['id'])->select();

				$order['goods']=$order_goods;
				if($order['status']==0){
					$order['status']='待付款';
				}elseif($order['status']==1){
					$order['status']='待收货';
				}elseif($order['status']==2){
					$order['status']='已收货';
				}elseif($value['status']==3){
					$order['status']='已完成';
				}
				$order['date']=date("Y-m-d H:i",$order['date']);
			// print_r($order);exit();
				return jsonp($order);
		}

		public function newOrder(){
			$buyList = json_decode(input('buyList'),true);

			$total_price = input('carry_price') + input('goods_price');
			$orderModel = model('order');
			$orderInfo = array(
					'user_id'=>input('user_id'),
					'goods_num'=>input('goods_num'),
					'carry_price'=>input('carry_price'),
					'goods_price'=>input('goods_price'),
					'total_price'=>$total_price,
					'consignee'=>input('consignee'),
					'phone_num'=>input('phone_num'),
					'address'=>input('address'),
					'date'=>time(),
					'sn'=>date("Ymd").rand(1,999)
				);
			$orderModel->save($orderInfo);
			$order_id = $orderModel->id;

			foreach ($buyList as $key => $value) {
				$buyList[$key]['order_id'] = $order_id;
			}
			

			db('order_goods')->insertAll($buyList);
			return $order_id;
			
		}

		public function finPay(){
			$id = input('id');
			$info = array(
					'status'=>1
				);
			db('order')->where('id',$id)->update($info);
			return 1;
		}

		public function confirm(){
			$id = input('id');
			$info = array(
					'status'=>2
				);
			db('order')->where('id',$id)->update($info);
			return jsonp(1);
		}
}

 ?>