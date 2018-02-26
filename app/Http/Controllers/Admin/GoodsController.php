<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    /**
     * 加载商品列表
     */
    public function getIndex()
    {
        return view('/admin/goods/index');
    }

    /**
     * 加载添加商品页面
     */
    public function getAdd()
    {
        return view('/admin/goods/add');
    }

    public function postInsert()
    {
        echo '123';
    }
}
