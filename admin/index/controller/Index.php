<?php
namespace app\index\controller;
class Index extends \think\Controller {
	public function index() {
		return $this -> fetch('index');
	}

	public function login() {
		return $this -> fetch('login');
	}

}