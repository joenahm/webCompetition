<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Apply extends Controller
{
//
    public function apply()
    {
        $user = Session::get('name');
        if($_POST){
          $data =[
          'information'=>$_REQUEST['id'],
          'username'=>$user['username'],
        ];

        //根据时间戳和学生信息存入记录里
        db('record')->insert($data);
          die(json_encode(array('status'=>1)));
        }else{
          die(json_encode(array('status'=>0)));

        }

    }



}

?>
