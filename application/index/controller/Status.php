<?php
namespace app\index\controller;
use think\Controller;
class Status extends Controller
{
//
    public function index()
    {
      //控制器调用，输出分类信息
        $postNew = controller('PostNew');
        $postNew->postNew();
//获取传过来的时间戳
        $timestamp = request()->get('id');
        $status = db('information')->where('timestamp',$timestamp)->find();
        $this->assign('status',$status);
        $statusUser =db('business')->where('username',$status['username'])->find();
        $this->assign('statusUser',$statusUser);
        return $this->fetch('');
    }



}

?>
