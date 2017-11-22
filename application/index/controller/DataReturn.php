<?php
namespace app\index\controller;
use think\Controller;
class DateReturn extends Controller
{
   
    public function datareturn()
    {

       $username = $_POST['username'];
       $array = array();
       $array['usrname'] =  $username;
        echo  json_decode($array);
        return $this->fetch('index/index');
       
   
    

    }

     
   
}

?>