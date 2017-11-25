<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
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
                   'password'=>md5($_REQUEST['password']),
                   'phone'=> $_REQUEST['phone'],
               ];
                    if($_REQUEST['usertype']=='merchant'){
                        db('business')->insert($data);
                    }else{
                        db('student')->insert($data);
                    }
                 Session::set('username',$data['username']);
               die(json_encode(array('status'=>'1')));

            }else{
                die(json_encode(array('status'=>'-1')));
            }
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