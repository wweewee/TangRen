<?php
namespace app\userlogin_module\library;

class UserloginLibrary
{
    public function userInfo($code,$appID,$appSecret)
    {

        $wx_config = config('mysql_config.');

        // 处理url字符串，发送指定数据
        $loginUrl  = $wx_config['wx_LoginUrl'];
        $loginUrl .= '?appid='.$appID;
        $loginUrl .= '&secret='.$appSecret;
        $loginUrl .= '&js_code='.$code;
        $loginUrl .= '&grant_type=authorization_code';

        // 获取请求接口返回的用户Openid数据
        $result = getCurl($loginUrl);

        $wxResult = json_decode($result,true);

        // 验证返回数据格式是否正确
        if(empty($wxResult['openid'])){
            return $err = ['errCode'=>'1','msg'=>'error','retData'=>'没有openid'];
        }

        $loginFile = array_key_exists('errcode',$wxResult);

        if($loginFile){
            return $err = ['errCode'=>'1','msg'=>'error'];
        }

        return $date = ['errCode'=>'0','msg'=>'success','retData'=>$wxResult];

    }


}
