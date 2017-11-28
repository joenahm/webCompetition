<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Insertinformation extends Controller
{

    public function insertInformation()
    {
      $user = Session::get('name');
      $data = array();
        if(!empty($_POST)){
            $data = [
              'title'=>$_REQUEST['title'],
              'salary'=>$_REQUEST['salary'],
              'details'=>$_REQUEST['info'],
              'insurgent'=>$_REQUEST['isurgent'],
              'cate'=>$_REQUEST['sort'],
              'username'=>$user['username'],
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
