<?php
namespace app\index\controller;
use think\Controller;
class InsertInformation extends Controller
{

    public function InsertInformation()
    {
      $data = array();
        if(!empty($_POST)){
            $data = [
              'title'=>$_REQUEST['title'],
              'salary'=>$_REQUEST['salary'],
              ''=>$_REQUEST['info'],
              ''=>$_REQUEST['isurgent'],
              ''=>$_REQUEST['sort'],
            ];
            db('information')->insert($data);
        }
    }
}

?>
