<?php
namespace app\index\controller;
use think\Controller;
class User extends Controller
{
  
    public function index()
    {
                 
        return $this->fetch('User/user');
    }


}

?>