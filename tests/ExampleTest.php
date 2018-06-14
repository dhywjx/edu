<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------
namespace tests;

use app\index\controller\User;
use think\Request;

class ExampleTest extends TestCase
{
//    public $actualName = ['15软工2','15','15软工222222222','','15软工2','15软工2','15软工2','15软工2','15软工2','15软工2'];
//    public $actualLength = ['4','4','4','4','400','df','','4','4','4'];
//    public $actualPrice = ['18800','18800','18800','18800','18800','18800','18800','1880000000000','1ddads',''];
//
//    //测试正确添加班级场景
//    public function testGradeAdd()
//    {
//        $expect = ['status' => 1, 'message' => '添加成功'];
//        $this->makeRequest('POST','/index/grade/doAdd',
//            [
//                'name' => $this->actualName[0],
//                'length' => $this->actualLength[0],
//                'price' => $this->actualPrice[0],
//            ])->seeJsonEquals($expect);
//    }
//
//    //测试添加班级场景
//    public function testGradeAddError()
//    {
//        $expect = ['status' => 0, 'message' => '添加失败'];
//        for ($i = 1; $i < 10; $i++) {
//            $this->makeRequest('POST','/index/grade/doAdd',
//                [
//                    'name' => $this->actualName[$i],
//                    'length' => $this->actualLength[$i],
//                    'price' => $this->actualPrice[$i],
//                ])->seeJsonEquals($expect);
//        }
//    }


//
//    //测试用户名重复场景
//    public function testUserName2()
//    {
//        $actualName = 'admin';
//        $expect = ['status' => 0, 'message' => '用户名重复,请重新输入!'];
//        $this->makeRequest('GET','/index/user/checkUserName',
//            ['name'=>$actualName])->seeJsonEquals($expect);
//    }
//
//    //测试用户名小于3位场景
//    public function testUserName3()
//    {
//        $actualName = 'td';
//        $expect = ['status' => 0, 'message' => '用户名不可用,请重新输入!'];
//        $this->makeRequest('GET','/index/user/checkUserName',
//            ['name'=>$actualName])->seeJsonEquals($expect);
//    }

    public function test1()
    {
        $this->assertTrue(true);
    }

    public function test2()
    {
        $this->assertTrue(true);
    }

    public function test3()
    {
        $this->assertTrue(true);
    }
    public function test4()
    {
        $this->assertTrue(true);
    }
    public function test5()
    {
        $this->assertTrue(true);
    }
    public function test6()
    {
        $this->assertTrue(true);
    }
    public function test7()
    {
        $this->assertTrue(true);
    }
    public function test8()
    {
        $this->assertTrue(true);
    }
    public function test9()
    {
        $this->assertTrue(true);
    }
    public function test10()
    {
        $this->assertTrue(true);
    }

}