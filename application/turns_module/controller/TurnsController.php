<?php

namespace app\turns_module\controller;

use app\turns_module\model\TurnsModel;
use \think\Controller;
use think\Db;
use think\Request;

class TurnsController extends Controller
{
    public function index(\think\Request $request)
    {
        $post = $request->post();

        $date = Db::table('date_turns_list')->where('turns_class',$post['turns_class'])->select();

        //执行函数返回值
        $date = ['errcode'=> 0,'errMsg'=>'查询成功','retData'=>$date];

        return json_encode($date,320);
    }
}