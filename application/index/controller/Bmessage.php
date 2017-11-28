<?php
namespace app\index\controller;
use think\Controller;
class Bmessage extends Controller
{
//
    public function Bmessage()
    {
        //根据时间戳查
        //根据商家名称来查兼职信息
        db('record')->count('username');

    }



}

?>
