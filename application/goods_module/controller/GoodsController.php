<?php

namespace app\goods_module\controller;

use \think\Controller;
use think\Request;

class GoodsController extends Controller
{
	public function select()
	{
		return 'select查询方法';
	}

	public function create(\think\Request $request)
	{	
		// $request = $request->post();
		// $request = Request::instance();
		echo '域名: ' . $request->domain() . '<br/>';
		echo "当前模块名称是" . $request->module();
		echo "当前控制器名称是" . $request->controller();
		echo "当前操作名称是" . $request->action();
		echo 'url路由: ' . $request->url() . '<br/>';
		echo '当前请求变量: ' . $requests->param('id'). '<br/>';
		// return 'create添加方法'.$request;
	}

	public function update()
	{
		return 'update修改方法';
	}
}