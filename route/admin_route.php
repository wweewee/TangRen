<?php 
// Route::请求方式('路由名','，模块名/控制名/方法名');


//用户登录模块
Route::post('index/login','userlogin_module/UserloginController/login');

//轮播图模块
Route::post('index/turns','turns_module/TurnsController/index');
//user_purchase_module/v1.controller.UserPurchaseController/userPayCallback


 ?>