<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2017/11/24
 *Time:6:10
 */
namespace app\index\controller;
use app\index\controller\Base;
use think\Request;
use app\index\model\User as UserModel;
use think\Session;
class User extends Base
{
   //登录界面
    public function login()
    {
        $this->alreadyLogin();
        return $this->view->fetch();
    }
    //验证登录
    public function checkLogin(Request $request)
    {
        //初始返回参数
        $status = 0;
        $result = '';
        $data = $request->param();

        $rule = [
            'name|用户名' => 'require',
            'password|密码' => 'require'

        ];

        $msg = [
            'name' => ['require'=>'用户名不能为空，请检查'],
            'password' => ['require'=>'密码不能为空，请检查']

        ];

        $result = $this->validate($data, $rule,$msg);

        if ($result === true) {
            $map = [
                'name' =>$data['name'],
                'password' =>md5($data['password']),
            ];

            $user = UserModel::get($map);

            if ($user === null) {
                $status = 0;
                $result = '没有找到该用户';
            } else {
                $status = 1;
                $result = '验证通过，点击【确定】进入';
                Session::set('user_id',$user->id);
                Session::set('user_info', $user->getData());
                $user->setInc('login_count');
            }
        }

        return ['status'=>$status,'message'=>$result,'data'=>$data];
    }

    //退出登录
    public function logout()
    {
        UserModel::update(['login_time'=>time()],['id'=>Session::get('user_id')]);

        Session::delete('user_id');
        Session::delete('user_info');
        $this->success('注销登录，正在返回', 'user/login');
    }

    //显示管理员界面
    public function adminList()
    {
        $this->assign('title', '管理员列表');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');

        $this->view->count = UserModel::count();

        $userName = Session::get('user_info.name');
        if ($userName == 'admin') {
            $list = UserModel::all();
        } else {
            $list=UserModel::all(['name'=>$userName]);
        }

        $this->assign('list', $list);

        return $this->fetch('admin_list');
    }

    //设置是否启用
    public function setStatus(Request $request)
    {
        $user_id = $request->param('id');
        $result = UserModel::get($user_id);
        if ($result->getData('status') == 1) {
            UserModel::update(['status'=>0],['id'=>$user_id]);
        } else {
            UserModel::update(['status'=>1],['id'=>$user_id]);
        }
    }

    //添加管理员界面
    public function adminAdd(Request $request)
    {
        $this->assign('title', '添加管理员');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');
        return $this->fetch('admin_add');
    }

    //检查用户名是否重复
    public function checkUserName(Request $request)
    {
        $userName = trim($request->param('name'));
        $name = ['name'=>$userName];
        $status = 1;
        $message = '用户名可用';

        $rule = [
            'name|用户名' => "require|min:3|max:10",
        ];
        $result = $this -> validate($name, $rule);
        if ($result === true) {
            if (UserModel::get(['name' => $userName])) {
                $status = 0;
                $message = '用户名重复,请重新输入!';
            }
        }else{
            $status = 0;
            $message = '用户名不可用,请重新输入!';
        }
        return ['status' => $status, 'message' => $message];

    }

    //检查email是否重复
    public function checkUserEmail(Request $request)
    {
        $userEmail = trim($request -> param('email'));
        $status = 1;
        $message = '邮箱可用';
        if (UserModel::get(['email'=> $userEmail])) {
            //查询表中找到了该邮箱,修改返回值
            $status = 0;
            $message = '邮箱重复,请重新输入~~';
        }
        return ['status'=>$status, 'message'=>$message];

    }

    //添加管理员提交
    public function addUser(Request $request)
    {
        $data = $request->param();
        $status = 1;
        $message = '添加成功';

        $rule = [
            'name|用户名' => "require|min:3|max:10",
            'password|密码' => "require|min:3|max:10",
            'email|邮箱' => 'require|email'
        ];

        $result = $this -> validate($data, $rule);

        if ($result === true) {
            $user= UserModel::create($request->param());
            if ($user === null) {
                $status = 0;
                $message = '添加失败~~';
            }
        }else{
            $status = 0;
            $message = '添加失败~~';
        }

        return ['status'=>$status, 'message'=>$message];
    }

    //编辑用户信息界面
    public function adminEdit(Request $request)
    {
        $user_id = $request->param('id');
        $result = UserModel::get($user_id);
        $this->assign('title', '编辑管理员信息');
        $this->assign('keywords', '教学管理系统');
        $this->assign('dsc', '教学案例');
        $this->assign('user_info', $result->getData());

        return $this->fetch('admin_edit');
    }

    //编辑提交用户修改信息
    public function editUser(Request $request)
    {
        $data = [];
        $param = $request->param();

        foreach ($param as $key => $value) {
                $data[$key] = $value;
        }
        $condition = ['id'=>$data['id']] ;
        $result = UserModel::update($data, $condition);

        if (true == $result) {
            return ['status'=>1, 'message'=>'更新成功','data'=>$data];
        } else {
            return ['status'=>0, 'message'=>'更新失败,请检查'];
        }
    }

    //删除用户
    public function deleteUser(Request $request)
    {
        $user_id = $request->param('id');
        UserModel::update(['is_delete' => 1], ['id' => $user_id]);
        UserModel::destroy($user_id);
    }



    public function unDelete()
    {
        UserModel::update(['delete_time'=>null],['is_delete'=>1]);
    }


}
