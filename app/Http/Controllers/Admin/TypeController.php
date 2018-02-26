<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class TypeController extends Controller
{
    /**
     * 获取分类信息
     */
    public static function getType()
    {
        //查询分类数据
        $res = DB::table('type')
            ->select(DB::raw("*,CONCAT(path,',',id) as npath"))
            ->orderBy('npath','asc')
            ->get();
//        $res = DB::select("select *,CONCAT(path,',',id) as npath FROM type ORDER BY npath;");

        //设置子分类样式
        foreach ($res as $k=>$v){
            //根据npath中逗号出现的次数，判定是几级分类，加符号区分
            $len= substr_count($res[$k]['npath'],',')-1;
            $res[$k]['tags']=str_repeat('|----',$len);
        }
        return $res;
    }


    /**
     * 加载浏览分区页面
     */
    public static function getIndex()
    {
        $res = self::getType();

        return view('/admin/type/index',['res'=>$res]);
    }

    /**
     * 加载添加分区页面
     */
    public function getAdd($id)
    {
        $res = self::getType();

        return view('/admin/type/add',['res'=>$res,'id'=>$id]);
    }

    /**
     * 执行添加
     */
    public function postInsert(Request $request)
    {
        $data = $request->except('_token');
        //判断是否是父分类
        if($data['pid']==0){
            $data['path']=0;
        }else{
            //获取父类的path
            $info=DB::table('type')->where('id','=',$data['pid'])->get();
            $data['path']=$info[0]['path'].','.$data['pid'];
        }

        //执行添加
        $res = DB::table('type')->insert($data);

        //判断结果
        if($res!=false){
            echo "<script>alert('恭喜，添加成功!');window.location.href='/Admin/Type/index';</script>";
        }else{
            echo "<script>alert('抱歉，添加失败!')</script>";
        }
    }

    /**
     * 加载修改页面
     */
    public function getEdit($id)
    {
        //查询当前板块信息
        $info=DB::table('type')->where('id','=',$id)->get()[0];

        //判断是否有父分类
        $father=DB::table('type')->where('id','=',$info['pid'])->get();
        if($father!=[]){
            $info['father']=$father[0]['name'];
        }else{
            $info['father']='';
        }

        return view('/admin/type/edit',['info'=>$info]);
    }

    /**
     * 执行修改
     */
    public function postUpdate(Request $request)
    {
        $data = $request->except('_token');
//        dd($data);

        $res = DB::table('type')->where('id','=',$data['id'])->update($data);

        //判断结果
        if($res!=false){
            echo "<script>alert('恭喜，修改成功!');window.location.href='/Admin/Type/index';</script>";
        }else{
            echo "<script>alert('抱歉，修改失败!');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }

    }

    /**
     * 执行删除
     */
    public function getDelete($id)
    {
        //判断该分类下是否有子类
        $res = DB::table('type')->where('pid','=',$id)->get();

        if($res){
            echo "<script>alert('抱歉，该分类下含有子分类，不能删除!');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
        }else{
            //执行删除
            $num = DB::table('type')->where('id','=',$id)->delete();

            if($num){
                echo "<script>alert('恭喜，删除成功!');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }else{
                echo "<script>alert('抱歉，删除失败!');window.location.href='{$_SERVER['HTTP_REFERER']}'</script>";
            }
        }
    }
}
