<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2017/11/30
 *Time:12:21
 */
namespace app\index\controller;
use app\index\model\Grade as GradeModel;
use think\Request;

class Grade extends Base
{
    //班级列表界面
    public function gradeList()
    {
        $grade = GradeModel::all();

        $count = GradeModel::count();

        foreach ($grade as $value) {
            $data = [
                'id' => $value->id,
                'name' => $value->name,
                'length' => $value->length,
                'price' => $value->price,
                'status' => $value->status,
                'create_time' => $value->create_time,
                'teacher' => isset($value->teacher->name)?$value->teacher->name:'<span style="color:red;">未分配</span>',
            ];

            $gradeList[] = $data;
        }

        $this->assign('gradeList', $gradeList);
        $this->assign('count', $count);
        $this->assign('title', '班级列表');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');

        return $this->fetch('grade_list');
    }

    //添加班级
    public function gradeAdd()
    {
        $this->assign('title', '添加班级');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');

        return $this->fetch('grade_add');
    }

    //执行添加班级功能
    public function doAdd(Request $request)
    {
        $data = $request->param();
        $status = 0;
        $message = '添加失败';

        $rule = [
             'name' => "require|min:3|max:10",
            'length' => "require|max:2",
            'price' => "require|max:5"
        ];

        $result = $this->validate($data, $rule);

        if ($result === true) {
            $grade = GradeModel::create($data);
            if ($grade == true) {
                $status = 1;
                $message = '添加成功';
            }
        }

        return ['status'=>$status,'message'=>$message];
    }

    //课程状态切换
    public function setStatus(Request $request)
    {
        $grade_id = $request->param('id');
        $result = GradeModel::get($grade_id);
        if ($result->getData('status') == 1) {
            GradeModel::update(['status'=>0],['id'=>$grade_id]);
        } else {
            GradeModel::update(['status'=>1],['id'=>$grade_id]);
        }
    }

    //班级编辑界面
    public function gradeEdit(Request $request)
    {
        $grade_id = $request->param('id');
        $result = GradeModel::get($grade_id);
        $result->teacher = empty($result->teacher->name)?"未分配":$result->teacher->name;

        $this->assign('title', '编辑班级信息');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');
        $this->assign('grade_info',$result);

        return $this->fetch('grade_edit');
    }

    //班级编辑功能
    public function doEdit(Request $request)
    {
        $data = $request -> except('teacher');
        $condition = ['id'=>$data['id']];

        $result = GradeModel::update($data, $condition);

        if (true == $result) {
            return ['status'=>1, 'message'=>'更新成功'];
        } else {
            return ['status'=>0, 'message'=>'更新失败,请检查'];
        }
    }

    //删除班级
    public function deleteGrade(Request $request)
    {
        $grade_id = $request->param('id');
        GradeModel::update(['is_delete'=>1],['id'=>$grade_id]);
        GradeModel::destroy($grade_id);
    }

    //恢复删除
    public function unDelete()
    {
        GradeModel::update(['delete_time'=>null],['is_delete'=>1]);
    }
}
