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
        self::information();
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


    
    //接收上传的图片，移动目录以及重组路径存入数据库
 public function photo(){  
//     $photo = request()->file('image'); 
//      $info = $photo->validate(['rootPath'=>'public','savePath'])->move();
//      if($info){
//          $img_url = $info['rootPath'].$info['savePath'];
//          db('business')->insert($img_url);  
//      }

    
    
}  

//兼职信息
    public function information(){

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