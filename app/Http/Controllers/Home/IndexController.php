<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    /**
     * 加载前台首页
     */
    public function getIndex()
    {
        return view('/home/index');
    }

}

?>
