<?php
namespace app\pc\controller;
use think\captcha\Captcha;
use think\Session;

class Personal extends \think\Controller
{	
	/* 公共使用 */
	protected function _initalize()
	{
        $noLogin = array('index','login','checkName','regAjax');
        if (session('?user')){
            if (in_array(request ()->action(),$noLogin)) {
                $this->redirect('index');
            }
        }else{
            if (!in_array(request()->action(), $noLogin)) {
                $this->redirect('register');
            }
        }
        parent::_initalize();
	}

    public function index()
    {
      return 'Personal';
    }
    /*----- 注册 ----*/
    public function register()
    {
        //$uinfo=Session::get('user_info');
    	return $this->fetch();
    }
 	/*----- 登陆 ----*/
    public function login()
    {

        //echo Session::get('user_name');
    	return $this->fetch();
    }
    /*----- 用户中心 ----*/
    public function home()
    {   
        $this->navInfo();
        if (Session::get('user_id')) {

            $user_id = Session::get('user_id');
            $myOrderList = db('order')->where("user_id=$user_id")->select();

            // $myOrderData= json_encode($myOrderList);
            $this->assign('myOrderList',$myOrderList);
            
            //待支付数量
            $waitPayList= db('order')->where("user_id= $user_id and status = 0")->select();
            $this->assign('waitPayList',$waitPayList);
            $waitPayNum = 0;
            foreach ($waitPayList as $key => $value) {
                $waitPayNum += $value['goods_num'];               
            }
            $this->assign('waitPayNum',$waitPayNum);
            
            // print_r();  打印的是数组
            // echo ''; 打印的是变量

            //待收货、已支付数量
            $waitReceiveList= db('order')->where("user_id= $user_id and (status=1 or status=2)")->select();
            $this->assign('waitReceiveList',$waitReceiveList);
            $waitReceiveNum = 0;
            foreach ($waitReceiveList as $key => $value) {
                $waitReceiveNum += $value['goods_num'];               
            }
            $this->assign('waitReceiveNum',$waitReceiveNum);
            //已完成支付数量
            $finishList= db('order')->where(array('user_id'=>$user_id,'status'=>'3'))->select();
            $this->assign('finishList',$finishList);
            $finishNum = 0;
            foreach ($finishList as $key => $value) {
                $finishNum += $value['goods_num'];               
            }
            $this->assign('finishNum',$finishNum);
            // exit();
            //print_r($myOrderList);  全部list
            //print_r($waitPayList);  待支付的list
            return $this->fetch();
        }else{
            return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;text-align: center;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 56px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>╭(╯^╰)╮才不让你进来呢</h1><p> 吉米手机市场 V5<br/><span style="font-size:30px">请先登录才可以访问个人中心(⊙o⊙)哦</span></p><span style="font-size:22px;">>>><a href="login" target="qiniu">吉米登陆
            </a> </span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
        }
        
    }


    //注册的API  写入数据表
    public function regAjax()
    {	
    	//用户信息存放到一个 model里面
    	$addData['username'] = input('user_val');
        
    	$addData['password'] = input('user_psw');

    	$addData['create_time']= time();

    	$user_capt = input('captcha');

    	$captcha = new captcha();

    	if ($captcha->check($user_capt)) {
    		//model存入数据表中
    		$userModel =model('user');
    		$userModel->save($addData);
    		//存入数据库时候 返回一个数据表的自增长id(  由于其他的数据操作)
    		$addData['id'] = $userModel->id;
    		//把用户信息存入会话中 session,调用session的静态方法
    		Session::set('user',$addData);
           // $this->redirect('index')
    		return jsonp(array('status'=>1,'msg'=>'注册成功'));

    	}else {
    		return jsonp(array('status'=>0,'msg'=>'验证码不正确'));
    	}
    	
    }

    //检查用户名是否已存在数据表
    public function checkName(){
    	$user_name = input('user_name');

    	$info = db('user')->where("username='$user_name'")->find();

    	if ($info) {
    		return jsonp(array('status'=>0,'msg'=>'用户名已存在!'));
    	}else{
    		return jsonp(array('status'=>1));
    	}

    }

    // 登陆验证
    public function loginAjax(){
        $user_name = input('user_name');
        $user_psw = input('user_psw');

        $user_info= db('user')-> where("username='$user_name' and password='$user_psw'")->find();
        // print_r($user_info);
        if ($user_info) {
            Session::set('user_info',$user_info);
            Session::set('user_id',$user_info['id']);
            return jsonp(array('status'=>1,'msg'=>'登陆成功'));            
        }else{
            return jsonp(array('status'=>0,'msg'=>'用户名或密码有误'));
        }
    }
    
    //我的订单待支付API
    public function payStatusAjax(){
        $status=input('status');
        $user_id = Session::get('user_id');
        $where_sql= '' ;
        if($status== 2){
           $where_sql= 'status = 0' ;
        }else if($status ==3){
            $where_sql= 'status =1 or status =2' ;
        }else if($status==4){
            $where_sql= 'status =3' ;
        }else {
            $where_sql = '';
        }
        $payStatusList= db('order')->where($where_sql)->where("user_id = $user_id")->select();
        $this->assign('payStatusList',$payStatusList);

        return view('ajax');
    }

    //封装函数 nav-header相关
    public function navInfo()
    {
        $userData=Session::get('user_info');
        // print_r($user);
        // echo $userData['username'];
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
        }else{

        }
        $this->assign('userData',$userData);

    }
}
