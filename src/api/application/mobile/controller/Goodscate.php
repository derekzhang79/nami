<?php
namespace app\mobile\controller;
use think\Request;  
use think\Page; 


// 建立控制器的规范
class Goodscate extends \think\Controller{


	public function index()
	{
		$param_a =   $param=Request::instance()->param();

		$where = [];
		if (isset($param_a['p_id'])) {
			$p_id = $param_a['p_id'];
			$where = ['parent_id'=>$p_id];
		}

		// db方法传的参数：第一个是表名
		$list=db('cate')->alias('c')
			->join('__DETAIL_FORMAT__ g','g.cate_id=c.id')
			->field('c.id, c.cate_name, c.cate_thumb, g.id, g.goods_name, g.goods_image, g.goods_price')
			->where($where)
			->order('c.id desc')
			->limit('0,10')
			->select();
			
		// print_r($list);
		$rtn_list=[];
		foreach ($list as $key => $value) {
			 $rtn_list[$value['id']]['id'] =$value['id']; 
			 $rtn_list[$value['id']]['cate_name'] =$value['cate_name']; 
			 $rtn_list[$value['id']]['cate_thumb'] =$value['cate_thumb']; 
			 $rtn_list[$value['id']]['goods_list'][$value['id']]['goods_id'] =$value['id']; 
			 $rtn_list[$value['id']]['goods_list'][$value['id']]['goods_name'] =$value['goods_name']; 
			 $rtn_list[$value['id']]['goods_list'][$value['id']]['goods_image'] =$value['goods_image']; 
			 $rtn_list[$value['id']]['goods_list'][$value['id']]['goods_price'] =$value['goods_price']; 
		}
		 
	

		// 查对应的分类和对应的商品
		return json($rtn_list);
	}

	 
 

}


?>