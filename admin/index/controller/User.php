<?php
namespace app\index\controller;

class User extends \think\Controller
{
		public function index()         
		    {                           
		    	return $this->fetch();    
		    }                           
		public function add()         
		    {                           
		    	return $this->fetch();    
		    }  
		public function edit()         
		    {     
		    	 $data['id'] = '11';
		    	 $data['username'] = 'ThinkPHP';
					$data['realname'] = 'thinkphp@qq.com';
					$data['email'] = 'thinkphp@qq.com';
					
					$role_checkbox="role_checkbox";
						$this->assign('role_checkbox',$role_checkbox); 
		    	$this->assign('user',$data);                    
		    	return $this->fetch();    
		    }
}                   