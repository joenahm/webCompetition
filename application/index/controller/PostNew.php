<?php
namespace app\index\controller;
use think\Controller;
class PostNew extends Controller
{

    public function postNew()
    {
        $cate = db('cate')->select();
        $this->assign('cate',$cate);
        return $this->fetch('common/postNew');
    }
}

?>
