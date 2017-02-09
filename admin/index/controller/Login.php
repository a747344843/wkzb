<?php
namespace app\index\controller;
use think\Request;
use think\Db;
use think\Session;
use think\Cookie;
class Login extends \think\Controller {
    public function login() {
        return $this -> fetch('login');
    }
    public function logins(){
        $admin_name = Request::instance()->post('username');
        $admin_pwd = Request::instance()->post('password');
        $arr = Db::table('admin')
            ->where('a_name', $admin_name)
            ->where('a_pwd', $admin_pwd)
            ->find();
        if($arr){
//            return 1;
            Session::set('username', $arr['a_name']);
            return $this->fetch("index/index");
        }else{
            $this->redirect('Login/login');
//            return 2;
        }
    }
}