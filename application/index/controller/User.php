<?php
namespace app\index\controller;
use think\Controller;
class User extends Controller
{
  
    public function user()
    {
                 
        return $this->fetch('User/user');
    }


}

?>