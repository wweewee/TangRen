<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  ZhifuController.php
 *  创 建 者 :  Jing Zhi Qiang
 *  创建日期 :  2019/04/25 15:35
 *  文件描述 :  微信支付测试接口控制器
 *  历史记录 :  -----------------------
 */
namespace app\zhifu_module\working_version\v1\controller;
use think\Controller;
use app\zhifu_module\working_version\v1\service\ZhifuService;

class ZhifuController extends Controller
{
    /**
     * 名  称 : yonghu_zhifu()
     * 功  能 : 用户支付购买测试
     * 变  量 : --------------------------------------
     * 输  入 : (String) $post['token']   => '用户token';
     * 输  入 : (int) $post['p_id']       => '计划ID';
     * 输  入 : (int) $post['purchase']   => '购买方式';
     * 输  出 : {"errCode":0,"retMsg":"提示信息","retData":true}
     * 创  建 : 2019/04/18 17:51
     */
    public function yonghu_zhifu(\think\Request $request)
    {
        //实例化Service层
        $youService = new ZhifuService();

        //接收参数
        $post = $request->post();

        //执行函数返回值
        $res = $youService->yonghu_zhifu($post);

        //执行函数返回值
        return \RSD::wxReponse($res,'S');

    }
}