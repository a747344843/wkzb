<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    /**
     * 首页
     * @return mixed
     */
    public function index()
    {
        return $this->fetch('index');
    }

    /**
     * 房间列表
     * @return mixed
     */
    public function edit(){
        return $this->fetch('edit');
    }

    /**
     * 直播房间
     * @return mixed
     */
    public function room(){
        return $this->fetch('room');
    }
}
