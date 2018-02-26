<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//默认页面
Route::get('/', function () {
    return view('/Home/index');
});

//前台框架路由组
Route::group([],function (){
    //前台首页
    Route::controller('/Home/index','Home\IndexController');

    //产品板块
    Route::controller('/Home/Product','Home\ProductController');


});

//后台框架路由组

Route::group([],function (){

    //后台首页
    Route::controller('/Admin/index','Admin\IndexController');

    //用户列表
    Route::controller('/Admin/User','Admin\UserController');

    //分类版块
    Route::controller('/Admin/Type','Admin\TypeController');

    //商品版块
    Route::controller('/Admin/Goods','Admin\GoodsController');


});



?>
