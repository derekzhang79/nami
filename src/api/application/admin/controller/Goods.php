<?php
namespace app\admin\controller;

class Goods extends \think\Controller
{
    public function index()
    {

//        数据库的优化方法，第一个：需要哪些字段就只查询哪些字段
       $m=db('detail_format');
       $search_a=array();
       if (input("keyword")) {
          $search_a["m.goods_name"]=array("like","%".input("keyword")."%");
       }
       if (input("category_id")) {
          $search_a["m.cate_id"]=array("=",input("category_id"));
       }
        $goods_list=$m
            ->alias('m')
            ->field('m.id,m.goods_name,m.goods_price,s.cate_name')
            ->join("__CATE__ s","m.cate_id=s.id")
            ->where($search_a)
            ->order(" m.id desc ")
            ->paginate(10);

            // 测试的时候一定要边界值，为0不传的时候，传的时候很多数据为怎么样
      
        $this->assign('goods_list',$goods_list);

        $category_list = db('cate')->where("parent_id!=0")->select();
        $this->assign('category_list',$category_list);
       return $this->fetch();
    }

     public function add()
    {
        //明星的数据
        $category_list = db('cate')->where("parent_id!=0")->select();
        $this->assign('category_list',$category_list);
        return $this->fetch();
    }

    public function save()
    {

// print_r($_POST);
//        第一步：把表单传过来的数据放到一个数组里
        $save_data=array(
            'goods_name'=>input('goods_name'),
            'goods_deta'=>input('goods_deta'),
            'goods_price'=>input('goods_price'),
            'cate_id'=>input('cate_id')
        );
//            上传文件
//            如果没有上传文件提示错误
          $save_data['goods_image'] =  savePic(request(),'goods_image');
          $save_data['pic_1'] =  savePic(request(),'pic_1');
          $save_data['pic_2'] =  savePic(request(),'pic_2');
          $save_data['pic_3'] =  savePic(request(),'pic_3');
           
           //无论是否有上传文件都要保存数据
           $goodsModel = model('detail_format');
           $goodsModel->save($save_data);
           $goods_id =  $goodsModel->id;//商品ID
 
            // 添加演出时间,需要商品ID（GOODS_ID）
          
             // 定义一个临时的时间数组，用来保存它入库后的ID
             $temp_time_array=[];
            foreach ($_POST['goods_info'] as $key_attr => $value_attr) {   
               $goodsAttrModel = model('goods_attr');
               // 遍历一次添加一次，需使用create
               $n = $goodsAttrModel->create(array('goods_ver'=>$value_attr,'goods_id'=>$goods_id,'goods_price'=>$_POST['price'][$key_attr])); 
               $temp_attr_array[$key_attr] = $n->id;
               // echo $goodsTimeModel->getlastsql();
            }
            // 添加价格和库存
            foreach ($_POST['sku'] as $key => $value) {
              //第一次遍历是获取到的是时间 
              $attr_id = $temp_attr_array[$key];
              foreach ($value as $k_two => $v_two) {
                $color_data=array(
                    'goods_id'=>$goods_id,
                    'attr_id' => $attr_id ,
                    'goods_color' => $_POST['goods_color'][$k_two],
                    'store' => $v_two
                  );
                 db('color')->insert($color_data);
               }
            }
            $this->success('添加成功！','index');

    }

    public function delete()
    {
        $id = input("id");

        db('detail_format')->delete($id);
        db('goods_attr')->where("goods_id=$id")->delete();
        db('color')->where("goods_id=$id")->delete();

        $this->success('删除成功！','index');


    }

    public function edit()
    {
        $id = input("id");
        $info = db("detail_format")->where("id=$id")->find();
        $this->assign('info',$info);
        //明星的数据
        $category_list = db('cate')->where("parent_id!=0")->select();
        $this->assign('category_list',$category_list);

        return $this->fetch();
    }

    public function update()
    {
        $id = input("id");
        $updateData=[
            'goods_name'=>input('goods_name'),
            'goods_deta'=>input('goods_deta'),
            'goods_price'=>input('goods_price'),
            'cate_id'=>input('cate_id')
        ];

          $updateData['goods_image'] =  savePic(request(),'goods_image');
          if (empty($updateData['goods_image'])) {
           unset($updateData['goods_image']);
          }
          
          $updateData['pic_1'] =  savePic(request(),'pic_1');
          if (empty($updateData['pic_1'])) {
           unset($updateData['pic_1']);
          }

          $updateData['pic_2'] =  savePic(request(),'pic_2');
          if (empty($updateData['pic_2'])) {
           unset($updateData['pic_2']);
          }

          $updateData['pic_3'] =  savePic(request(),'pic_3');
          if (empty($updateData['pic_3'])) {
           unset($updateData['pic_3']);
          }


           db("detail_format")->where("id=$id")->update($updateData);
           $this->success('修改成功！','index');
      



    }
    //推荐操作
    public function recommed()
    {
      $id_a=$_GET['ids'];
      if (!empty($id_a)) {
          foreach ($id_a as $key => $value) {
              db('goods')->where("id=$value")->update(['position'=>input('position')]);
          }
          $this->success('推荐成功！','index');
      }
    }
}
