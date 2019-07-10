<?php 
// Route::请求方式('路由名','，模块名/控制名/方法名');

/**
 * 前台模块
 */
//前台用户登录模块
Route::post('index/login','userlogin_module/UserloginController/login');

Route::post('user/list','userlogin_module/UserloginController/create');

//轮播图模块
Route::post('index/turns','turns_module/TurnsController/index');




/**
 * 后台管理模块
 */
//轮播图
Route::post('index/turns','turns_module/TurnsController/index');





 ?>