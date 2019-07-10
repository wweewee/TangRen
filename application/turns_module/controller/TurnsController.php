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
        //获取传入参数
        $post = $request->post();

        //验证数据
        $validate =  new Validate([
            'turns_class'      => 'require',
        ],[
            'token.require'      => '缺少用户标识`token`数据',
            'body.require'       => '缺少商品描述`body`数据',
            'total_fee.require'  => '缺少商品价格`total_fee`数据',
        ]);

        //返回数据错误
        if(!$validate->check($_POST))
        {
            return returnData('error',$validate->getError());
        }

        $date = Db::table('date_turns_list')->where('turns_class',$post['turns_class'])->select();

        //执行函数返回值
        $date = ['errcode'=> 0,'errMsg'=>'查询成功','retData'=>$date];

        return json_encode($date,320);
    }


}