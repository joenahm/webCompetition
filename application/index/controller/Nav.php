<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Nav extends Controller
{
  
    public function nav()
    {
         if(Session::has('username')){
            $this->assign('userName',session('username'));
         }else{
             $a = '未登录';
             $this->assign('userName',$a);
         }
         self::status();
        return $this->fetch('common/nav');
    }

public function status(){
    if(Session::has('username')){
        $data= array(
            'before'=> 'none',
            'after' => 'block',
             
        );
        $this->assign('status',$data);
    }else{
        $data= array(
            'before'=> 'block',
            'after' => 'none',

        );
        $this->assign('status',$data);
    }
    return $this->fetch('common/nav');
    }
}

?>