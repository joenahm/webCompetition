<?php
namespace app\index\controller;
use think\Controller;
class Insertinformation extends Controller
{

    public function insertInformation()
    {
      $data = array();
        if(!empty($_POST)){
            $data = [
              'title'=>$_REQUEST['title'],
              'salary'=>$_REQUEST['salary'],
              'details'=>$_REQUEST['info'],
              'insurgent'=>$_REQUEST['isurgent'],
              'cate'=>$_REQUEST['sort'],
              'timestamp'=>time(),
            ];
          }else {
            $this->error('shibai');
          }
          db('information')->insert($data);
        die(json_encode(array('data'=>'lmmm')));
    }
}

?>
