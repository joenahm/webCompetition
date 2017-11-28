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
               ];
      //进行服务器端的验证
             $validate = \think\Loader::validate('User');
              $result =  $validate->check($data);
               if($result){
                    if($_REQUEST['usertype']=='merchant'){
                        db('business')->insert($data);
                    }else{
                        db('student')->insert($data);
                    }
                 Session::set('username',$data['username']);
            }else{
                Session::set('username',null);
              }
            }else{
                $this->error('12312');
            }
            $backinfo = self::infoback(session('username'),$_REQUEST['usertype']);
           die(json_encode($backinfo));
    }
//session调用函数
private function infoback($sessionInfo,$userType){
    $backinfo = array();
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
    if(Session::has('username')){
        $usertype = Session::get('name');
        $b = $usertype['username'];
        $userType =$usertype['usertype'];
    }else{
        $userType = null;
        $b = null;

    }
    $backinfo = self::infoback($b,$userType);
    die(json_encode($backinfo));

}

//兼职信息
    private function information(){

        $information = db('information')->order('time desc')->limit(0,5)->select();
         $this->assign('information',$information);
    }
//優秀商家
    public function gb(){
       $gb = db('business')->order('credit desc')->limit(0,3)->select();
       $this->assign('gb',$gb);
    }


}

?>
