<?php
namespace app\mobile\controller;
use think\Request; 

class Delivery
{
    public function index()
    {
        
    }

    public function save()
	{
		 $param=Request::instance()->param();
		 $delModel=model('delivery');
         $delModel->save($param);
         // 获取最近一次添加的自增长ID
          $id=  $delModel->id;
         
         return json(['status'=>1,'id'=>$id]);
		
	}

	  public function delete()
	{
		 $param=Request::instance()->param();
		 $delModel=model('delivery');
         $delModel->where($param)->delete();
         // 获取最近一次添加的自增长ID
         
         return json(['status'=>1]);
		
	}

	public function update()
	{
		$param=Request::instance()->param();
		 $delModel=model('delivery');
         $delModel->update($param);
         // 获取最近一次添加的自增长ID
         
         return json(['status'=>1]);
	}
}
