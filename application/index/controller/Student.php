<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2017/12/3
 *Time:22:51
 */
namespace app\index\controller;
use app\index\model\Student as StudentModel;
use app\index\model\Grade as GradeModel;
use think\Request;
class Student extends Base
{
    //学生列表界面
    public function studentList()
    {
        $studentList = StudentModel::paginate(8);
        $count = StudentModel::count();

        foreach ($studentList as $value) {
            $value->grade = $value->grade->name;
        }


        $this -> view -> assign('studentList', $studentList);
        $this -> view -> assign('count', $count);

        $this->assign('title', '学生列表');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');

        return $this->fetch('student_list');
    }

    //添加学生
    public function studentAdd()
    {
        $this->assign('title', '添加学生');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');

        $grade = GradeModel::all();

        $this->assign('gradeList', $grade);

        return $this->fetch('student_add');
    }

    //执行添加教师功能
    public function doAdd(Request $request)
    {
        $data = $request->param();
        $status = 0;
        $message = '添加失败';

        $rule = [
            'name' => "require",
            'sex' => "require",
            'age' => "require",
            'mobile' => "require",
            'email' => "require",
            'start_time' => "require",
            'grade_id' => "require",
            'status' => "require",
        ];

        $result = $this->validate($data, $rule);

        if ($result === true) {
            $teacher = StudentModel::create($data);
            if ($teacher == true) {
                $status = 1;
                $message = '添加成功';
            }
        }

        return ['status'=>$status,'message'=>$message];
    }

    //学生状态切换
    public function setStatus(Request $request)
    {
        $student_id = $request->param('id');
        $result = StudentModel::get($student_id);
        if ($result->getData('status') == 1) {
            StudentModel::update(['status'=>0],['id'=>$student_id]);
        } else {
            StudentModel::update(['status'=>1],['id'=>$student_id]);
        }
    }

    //学生编辑界面
    public function studentEdit(Request $request)
    {
        $student_id = $request->param('id');
        $result = StudentModel::get($student_id);
        $grade = GradeModel::all();


        $this->assign('title', '编辑学生信息');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');
        $this->assign('student_info',$result);
        $this->assign('gradeList', $grade);

        return $this->fetch('student_edit');
    }

    //教师编辑功能
    public function doEdit(Request $request)
    {
        $data = $request->param();
        $condition = ['id'=>$data['id']];

        $result = StudentModel::update($data, $condition);

        if (true == $result) {
            return ['status'=>1, 'message'=>'更新成功'];
        } else {
            return ['status'=>0, 'message'=>'更新失败,请检查'];
        }
    }

    //删除学生
    public function deleteStudent(Request $request)
    {
        $studnet_id = $request->param('id');
        StudentModel::update(['is_delete'=>1],['id'=>$studnet_id]);
        StudentModel::destroy($studnet_id);
    }

    //恢复删除
    public function unDelete()
    {
        StudentModel::update(['delete_time'=>null],['is_delete'=>1]);
    }
}
