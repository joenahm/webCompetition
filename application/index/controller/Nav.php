<?php
namespace app\index\controller;
use think\Controller;
class Nav extends Controller
{
   
    public function nav()
    {
         session_start();
          $this->assign('user',$_SESSION['username']);
          return $this->fetch('common/nav');

    }



     
   
}

?>