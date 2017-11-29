<?php
namespace app\index\controller;
use think\Controller;
use think\Ssession;
class Bmessage extends Controller
{
//
    public function Bmessage()
    {

        //根据时间戳查
        //根据商家名称来查兼职信息
        $user = session('name');
        $merchant = $user['username'];
        $count = db('record')->where('merchant',$merchant)->count('merchant');
        $this->assign('people',$count);
        $username = db('record')->where('merchant',$merchant)->find();
        //$student = $username['username'];
        $st = db('student')->where('username','zhang')->select();
        $this->assign('st',$st);

    }



}

?>
