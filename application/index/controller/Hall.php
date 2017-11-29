<?php
namespace app\index\controller;
use think\Controller;
class Hall extends Controller{

  public function index(){
    $postNew = controller('PostNew');
    $postNew->postNew();
    $event = controller('Bmessage');
    $event->Bmessage();
        //获取头部信息
      $event = controller('nav');
      $event->nav();
      //获取最新兼职信息
      $this->info();
      //获取列表名

      $this->cate();
      //获取父级目录下面的子目录
      $this->cateson();

      return $this->fetch('');

  }
  //获取父级分类目录
  public function cate(){
      $cate = db('cate')->select();
      $this->assign('cate',$cate);

  }
  //获取父级目录下的子集目录
  public function cateson(){
      $cateson = db ('cateson')->where('id',1)->select();
      $this->assign('cateson',$cateson);

  }
  //获取最新兼职信息
  public function info(){
        $information = db('information')->order('timestamp desc')->limit(0,10)->select();
         $this->assign('info',$information);

  }


}
?>
