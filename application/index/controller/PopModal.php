<?php
namespace app\index\controller;
use think\Controller;
class popModal extends Controller
{

    public function index()
    {
        $status = db('information')->limit(0,1)->find();
        $this->assign('status',$status);
        $statusUser =db('business')->limit(0,1)->find();
        $this->assign('statusUser',$statusUser);
        return $this->fetch('common／popModal');
    }



}

?>
