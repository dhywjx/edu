<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2017/11/30
 *Time:12:08
 */
namespace app\index\model;
use think\Model;
use traits\model\SoftDelete;

class Grade extends Model
{
    use SoftDelete;

    //设置当前表默认日期时间显示格式
    protected $dateFormat = 'Y/m/d';

    //定义表中的删除时间字段,来记录删除时间
    protected $deleteTime = 'delete_time';

    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;

    protected $createTime = 'create_time';

    protected $updateTime = 'update_time';

    // 定义自动完成的属性
    protected $insert = ['status' => 1];

    // 定义关联方法
    public function teacher()
    {
        // 班级表与教师表是1对1关联
        return $this->hasOne('Teacher');
    }

    // 定义关联方法
    public function student()
    {
        return $this->hasMany('student');
    }

    //数据表中启用字段:status返回值处理
    public function getStatusAttr($value)
    {
        $status = [
            0 => '已停课',
            1 => '已开课',
        ];

        return $status[$value];
    }
}