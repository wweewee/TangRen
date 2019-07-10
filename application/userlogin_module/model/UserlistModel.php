<?php

namespace app\userlogin_module\model;

use think\Model;

class UserlistModel extends Model
{
    protected $pk = 'user_id';

    // 设置当前模型对应的完整数据表名称
    protected $table = 'date_user_list';

    // 加载配置数据表名
    protected function initialize()
    {
        $this->table = config('mysql_config.User_list');
    }

}
