<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    /**
     * 首页
     * @return mixed
     */
    public function index()
    {
        $res = Db::table('type')->limit('10')->select();
//        var_dump($res);die;
        $this -> assign('res',$res);
        $user = Db::table('user')
            ->where("u_status=2")
            ->order("u_money","desc")
            ->limit("10")
            ->select();
//        var_dump($user);die;
        $this -> assign('user',$user);
        $room = Db::table('room')
            ->join('type','room.r_tid = type.t_id')
            ->join('user','room.r_uid = user.u_id')
            ->where("r_status=1")
            ->order("r_money","desc")
            ->limit("8")
            ->select();
//        var_dump($room);die;
        $this->assign("room",$room);
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
