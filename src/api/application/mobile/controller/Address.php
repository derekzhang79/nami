<?php 
	namespace app\mobile\controller;

	class Address extends \think\Controller{
		public function getAddressList(){
			$user_id = input('user_id');
			$address_list = db('consignee')->where('user_id',$user_id)->order('id desc')->select();
			return jsonp($address_list);
		}

		public function editInfo(){
			$id = input('id');
			$addressInfo = db('consignee')->where('id',$id)->find();
			return jsonp($addressInfo);
		}

		public function updateInfo(){
			$id = input('id');
			$addressInfo = array(
    				'user_id'=>input('user_id'),
    				'consignee'=>input('consignee'),
    				'address'=>input('address'),
    				'phone_num'=>input('phone_num'),
    				'ps'=>input('ps')
    			);
    		db('consignee')->where('id',$id)->update($addressInfo);
			return jsonp(1);
		}

		public function create(){
    		$addressInfo = array(
    				'user_id'=>input('user_id'),
    				'consignee'=>input('consignee'),
    				'address'=>input('address'),
    				'phone_num'=>input('phone_num'),
    				'ps'=>input('ps')
    			);
    		// print_r($addressInfo);exit();
    		db('consignee')->insert($addressInfo);
    		return jsonp(1);
		}

		public function delAddress(){
			$id = input('id');
			db('consignee')->where('id',$id)->delete();
			return jsonp(1);
		}
	}

 ?>