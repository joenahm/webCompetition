<?php
namespace app\index\controller;
use think\Controller;
class Status extends Controller
{

    public function index()
    {
        $status = db('information')->limit(0,1)->find();
        var_dump($status);
        return $this->fetch('');
    }



}

?>
