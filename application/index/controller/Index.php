<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
   
    public function index()
    {
      
   
          return $this->fetch();

    }
    public function datareturn()
    {  
            
            session_start();
             $username = $_SESSION['username'] = $_POST['username'];
             $this->assign('user',$username);
            if(!empty($_POST)){
               die(json_encode(array('status'=>'ture','msg'=>'success')));
            }else{
                die(json_encode(array('status'=>-1,'msg'=>'warning')));
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

    public function b_register(){
        
        
    }
    public function b_login(){
        
        
    }
    public function s_register(){
    
    
    }
    public function s_login(){
    
    
    
    }
    public function information(){

        
        return $this->fetch();
    }
    
    public function gb(){
        
        
    }
     
   
}

?>