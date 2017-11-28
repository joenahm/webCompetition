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
              'details'=>$_REQUEST['info'],
              'isurgent'=>$_REQUEST['isurgent'],
              'cate'=>$_REQUEST['sort'],
            ];
            var_dump($data);

            //db('information')->insert($data);
        }
    }
}

?>
