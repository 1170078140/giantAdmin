<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    /**
     * 加载用户列表
     */
    public function getIndex()
    {
        $res = DB::table('users')->get();
        return view('/admin/user/index',['res'=>$res,'auth'=>['普通用户','管理员','超级管理员']]);
    }

    //加载添加用户页面
    public function getAdd()
    {
        return view('/admin/user/add');
    }

    //加载回收站页面
    public function getRecycle()
    {
        return view('/admin/user/recycle');
    }

}
