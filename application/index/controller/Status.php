<?php
namespace app\index\controller;
use think\Controller;
class Status extends Controller
{
  
    public function index()
    {
                 
        return $this->fetch('');
    }


}

?>