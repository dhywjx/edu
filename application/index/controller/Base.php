<?php
/**
 *Created by PhpStorm,
 *User: wangjingxu
 *Date:2017/11/24
 *Time:3:22
 */
namespace app\index\controller;
use think\Controller;
use think\Session;
class Base extends Controller
{
    protected function _initialize()
    {
        parent::_initialize();
        define('USER_ID', Session::get('user_id'));
    }

    protected function isLogin()
    {
        if (empty(USER_ID)) {
            $this->error('用户未登录，无权访问', url('user/login'));
        }
    }

    protected function alreadyLogin()
    {
        if (!empty(USER_ID)) {
            $this->error('用户已经登录，请勿重复登录', url('index/index'));
        }
    }
}
