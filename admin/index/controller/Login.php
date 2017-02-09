<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Session;
use think\Cookie;
use app\index\model\Admin_user;
class Login extends Controller
{
    /*登陆页面*/
    public function login()
    {
      // print_r(Session::has('username'));die;
       return view('login');
    }
    /*验证*/
    public function verify()
    {
     $admin_name = Request::instance()->post('name');
     $admin_pwd = Request::instance()->post('pwd');
        $arr = Db::table('admin')
            ->where('a_name', $admin_name)
            ->where('a_pwd', $admin_pwd)
            ->find();
     // var_dump($arr);die;
     if (!empty($arr)) 
      {
         Session::set('username', $arr['a_name']);
         echo 1;
      }else{
          echo 2;
      }
    }
}