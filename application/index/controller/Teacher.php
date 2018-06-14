<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2017/12/3
 *Time:22:51
 */
namespace app\index\controller;
use app\index\model\Teacher as TeacherModel;
use app\index\model\Grade as GradeModel;
use think\Request;
class Teacher extends Base
{
    //教师列表界面
    public function teacherList()
    {
        $teacher = TeacherModel::all();
        $count = TeacherModel::count();

        foreach ($teacher as $value) {
            $data = [
                'id'=>$value->id,
                'name'=>$value->name,
                'degree' => $value->degree,
                'school' => $value->school,
                'mobile' => $value->mobile,
                'hiredate' => $value->hiredate,
                'status' => $value->status,
                'grade' => isset($value->grade->name)? $value->grade->name : '<span style="color:red;">未分配</span>',
            ];

            $teacherList[] = $data;
        }

        $this -> view -> assign('teacherList', $teacherList);
        $this -> view -> assign('count', $count);

        $this->assign('title', '教师列表');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');

        return $this->fetch('teacher_list');
    }

    //添加教师
    public function teacherAdd()
    {
        $this->assign('title', '添加教师');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');

        $grade = GradeModel::all();

        $this->assign('gradeList', $grade);

        return $this->fetch('teacher_add');
    }

    //执行添加教师功能
    public function doAdd(Request $request)
    {
        $data = $request->param();
        $status = 0;
        $message = '添加失败';

        $rule = [
            'name' => "require",
            'degree' => "require",
            'school' => "require",
            'mobile' => "require",
            'hiredate' => "require",
        ];

        $result = $this->validate($data, $rule);

        if ($result === true) {
            $teacher = TeacherModel::create($data);
            if ($teacher == true) {
                $status = 1;
                $message = '添加成功';
            }
        }

        return ['status'=>$status,'message'=>$message];
    }

    //课程状态切换
    public function setStatus(Request $request)
    {
        $teacher_id = $request->param('id');
        $result = TeacherModel::get($teacher_id);
        if ($result->getData('status') == 1) {
            TeacherModel::update(['status'=>0],['id'=>$teacher_id]);
        } else {
            TeacherModel::update(['status'=>1],['id'=>$teacher_id]);
        }
    }

    //教师编辑界面
    public function teacherEdit(Request $request)
    {
        $teacher_id = $request->param('id');
        $result = TeacherModel::get($teacher_id);
        $grade = GradeModel::all();


        $this->assign('title', '编辑班级信息');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');
        $this->assign('teacher_info',$result);
        $this->assign('gradeList', $grade);

        return $this->fetch('teacher_edit');
    }

    //教师编辑功能
    public function doEdit(Request $request)
    {
        $data = $request->param();
        $condition = ['id'=>$data['id']];

        $result = TeacherModel::update($data, $condition);

        if (true == $result) {
            return ['status'=>1, 'message'=>'更新成功'];
        } else {
            return ['status'=>0, 'message'=>'更新失败,请检查'];
        }
    }

    //删除班级
    public function deleteTeacher(Request $request)
    {
        $teacher_id = $request->param('id');
        TeacherModel::update(['is_delete'=>1],['id'=>$teacher_id]);
        TeacherModel::destroy($teacher_id);
    }

    //恢复删除
    public function unDelete()
    {
        TeacherModel::update(['delete_time'=>null],['is_delete'=>1]);
    }
}
