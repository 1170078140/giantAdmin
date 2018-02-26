<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class ProductController extends Controller
{
    /**
     * 加载产品首页
     */
    public function getIndex()
    {
        $res = self::getTypeById(1);
        foreach ($res as $k=>$v){
            $res[$k]['goods']=self::getGoodsById($v['id']);
        }
        return view('/home/product_center',['res'=>$res]);
    }

    //根据pid获取分类列表  递归算法实现无限分类
    public static function getTypeById($pid)
    {
        $data=array();
        $res=DB::table('type')->where('pid','=',$pid)->get();
        foreach ($res as $k=>$v){
            $res[$k]['tree'] = self::getTypeById($res[$k]['id']);
        }
        $data=$res;
        return $data;
    }

    //根据typeid获取产品信息
    public static function getGoodsById($typeid)
    {
        $data=array();
        $res=DB::table('goods')->where('typeid','=',$typeid)->get();
        $data=$res;
        return $data;
    }

    //加载商品详情页面
    public function getDetails()
    {
        return view('/home/product_details');
    }

}
