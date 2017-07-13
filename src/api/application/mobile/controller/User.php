<?php 
	namespace app\mobile\controller;

	class User extends \think\Controller{
		public function create(){
			// $para = Request::instance()->param();
			$user_data = array(
					'username'=>input('username'),
					'password'=>input('password'),
					'create_time'=>time()
				);
			$vali = validate("user");
			if($vali->check($user_data)){
				$user_data['password']=$user_data['password'];
				db('user')->insert($user_data);
				$user = db('user')->where($user_data)->find();
				$user['msg'] = 1;
				return jsonp($user);
			}else{
				$user['msg'] = 0;
				return jsonp($user);
			}
		}

		public function read(){
			$username = input('username');
			$password = input('password');
			$user = db('user')->where("username",$username)->where("password",$password)->find();
			if(empty($user)){
				$user['msg'] = 0;
				return jsonp($user);
			}else{
				$user['msg'] = 1;
				return jsonp($user);
			}
		}

		public function getInfo(){
			$id = input('id');
			$user_info = db('user')
						->field('id,username,birth,sex')
						->where("id",$id)
						->find();
			return jsonp($user_info);
		}

		public function updateInfo(){
			$id = input('id');
			if(input('type')=='username'){
				$username = input('username');
				$save_data=array("username"=>$username);
				$is_exit = db('user')->where("username",$username)->find();
				if(!empty($is_exit)){
					return jsonp(0);
					exit();
				}
			}elseif(input('type')=='sex'){
				$sex = input('sex');
				$save_data=array("sex"=>$sex);
			}elseif(input('type')=='birth'){
				$birth = input('birth');
				$save_data=array("birth"=>$birth);
			}elseif(input('type')=='password'){
				$password = input('password');
				$curPsw = input('curPsw');
				$is_right = db('user')->where("id",$id)->where("password",$curPsw)->find();
				if(empty($is_right)){
					return 0;
					exit();
				}
				$save_data=array("password"=>$password);
				db('user')->where("id",$id)->update($save_data);
				return 1;
				exit();
			}
			db('user')->where("id",$id)->update($save_data);

			return jsonp(1);
		}
	}
 ?>