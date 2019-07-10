<?php

namespace app\turns_module\model;

use think\Model;

class TurnsModel extends Model
{
    protected $pk = 'turns_id';

    // 设置当前模型对应的完整数据表名称
    protected $table = 'date_turns_list';

//    protected $resultSetType = 'collection';
// 加载配置数据表名
    protected function initialize()
    {
        $this->table = config('mysql_config.Turns_list');
    }

}
