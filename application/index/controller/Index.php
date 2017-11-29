<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
use think\Loader;
use think\Validate;
class Index extends Controller
{

    public function index()
    {
        $event = controller('nav');
        $event->nav();
        $postNew = controller('PostNew');
        $postNew->postNew();
        self::gb();
        $this->information();
        return $this->fetch();
    }

    public function datareturn()
    {
            if(!empty($_POST)){
               $data =[
                   'username'=>$_REQUEST['username'],
                   'password'=>$_REQUEST['password'],
                   'phone'=> $_REQUEST['phone'],
                   'usertype'=>$_REQUEST['usertype'],
               ];
                    if($_REQUEST['usertype']=='merchant'){
                        $result = db('business')->where('username',$data['username'])->find();
                        if($result==null){
                          db('business')->insert($data);
                          Session::set('name',$data);
                        }else{
                            Session::set('name',null);
                        }
                    }else{
                      $result = db('student')->where('username',$data['username'])->find();
                        if($result==null){
                            db('student')->insert($data);
                            Session::set('name',$data);
                      }else{
                          Session::set('name',null);
                      }
                    }
            }else{
                Session::set('name',null);
              }
              $us = Session::get('name');
              $b = $us['username'];
              $ustype = $us['usertype'];
              $backinfo = self::infoback($b,$ustype);
             die(json_encode($backinfo));

            }



//session调用函数
private function infoback($sessionInfo,$userType){
    if($sessionInfo){
        $backinfo['status'] = true;
        $backinfo['username'] = $sessionInfo;
        $backinfo['usertype'] = $userType;
    }else{
        $backinfo['status'] = false;
    }
    return $backinfo;

}
//用户登录以及对返回信息的处理

public function login(){
    if(!empty($_POST)){
               $data =[
                   'username'=>$_REQUEST['username'],
                   'password'=>$_REQUEST['password'],
                   'usertype'=>$_REQUEST['usertype'],
               ];
//数据库取值验证
        if($data['usertype']=="student"){
          $resultB = db('student')->where('username',$data['username'])->find();
          if($data['username']==$resultB['username']&&$data['password']==$resultB['password']){
                Session::set('name',$data);
          }else {
              Session::set('name',NULL);
          }
        }else{
          $resultU = db('business')->where('username',$data['username'])->find();
            if($data['username']==$resultU['username']&&$data['password']==$resultU['password']){
                  Session::set('name',$data);
                  echo Session::set('name',$data);

            }else {
              Session::set('name',NULL);
            }
        }
    }else{
      $this->error();
  }
      $usertype = Session::get('name');
      $b = $usertype['username'];
      $userType = $usertype['usertype'];
      $backinfo = self::infoback($b,$userType);
      die(json_encode($backinfo));
}
//刷新页面后判断session('usernmae')是否存在
public function refreshUserMode(){
    if(Session::has('name')){
        $usertype = Session::get('name');
        $b = $usertype['username'];
        $user =$usertype['usertype'];
    }else{
        $user = null;
        $b = null;

    }
    $backinfo = self::infoback($b,$user);
    die(json_encode($backinfo));

}
//获取分类
public function postNew()
{
    $cate = db('cate')->select();
    $this->assign('cate',$cate);
    return $this->fetch('common/postNew');
}
//兼职信息
    private function information(){

        $information1 = db('information')->order('timestamp desc')->limit(0,4)->select();
        $information2 = db('information')->order('timestamp desc')->limit(4,4)->select();
        $this->assign('information1',$information1);

         $this->assign('information2',$information2);

    }
//優秀商家
    public function gb(){
       $gb = db('business')->order('credit desc')->limit(0,3)->select();
       $this->assign('gb',$gb);
    }


}

?>
