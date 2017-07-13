<?php  
use think\Route;  //使用think底层的路由类 

Route::get('/',function(){  
    return 'Hello,world!';  
});  


// Route::resource('manhua','index/Comic');   //资源路由
// Route::resource('juji','index/Episode'); 
// Route::resource('yulan','index/Preview'); 


// 所有的api接口都需要在此文件,route.php定义指定的资源路由

// api的特点之一：  我们真正的逻辑文件名称可以不暴漏出去，     路由进行简单的名称，就像一个人的笔名


// 接口：是给到你合作的项目公司去提供数据

Route::resource('user','mobile/user');
Route::resource('address','mobile/address');

Route::resource('advert','Asp/Advert');
Route::resource('search','Asp/Goods');
Route::resource('daily','Asp/Daily');
Route::resource('newadd','Asp/Newadd');
Route::resource('theme','Asp/Theme');

Route::resource('goods','mobile/goods'); 
Route::resource('cate','mobile/cate'); 
Route::resource('goodscate','mobile/goodscate'); 



