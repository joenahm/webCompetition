<?php
namespace app\index\controller;
use think\Controller;
class User extends Controller
{
  
    public function index()
    {
         self::userInformation();        
        return $this->fetch('User/user');
    }
   public function userInformation(){
      if(session('username')){
          $resU = db('student')->where('username',session('username'))->find();
          $resS = db('business')->where('username',session('username'))->find();
     
      }
   }

}

?>