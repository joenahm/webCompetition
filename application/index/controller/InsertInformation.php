<?php
namespace app\index\controller;
use think\Controller;
class Insertinformation extends Controller
{

    public function insertInformation()
    {

            $data = [
              'title'=>$_REQUEST['title'],
              'salary'=>$_REQUEST['salary'],
              'details'=>$_REQUEST['info'],
              'insurgent'=>$_REQUEST['isurgent'],
              'cate'=>$_REQUEST['sort'],
            ];
            var_dump($data);
          db('information')->insert($data);
        die(json_encode(array('data'=>'lmmm')));
    }
}

?>
