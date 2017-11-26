<?php
namespace app\index\controller;
use think\Controller;
class Datareturn extends Controller
{
   
    public function datareturn()
    {
           $data = array(
               'key'=>'46c83bfdad304f9694300afa7afeb053', 
               'info'=>"今天怎么在理工大教室里啊",
               'userid'=>'123456',
           );
           $send = http_build_query($data);
           $send;
           $url = "http://www.tuling123.com/openapi/api";
            $res = $this->http_request($url, $send);
            $response = array();
            json_decode($res,true);
             $response =json_decode($res,true);
            echo  $response['text'];
    }
    function http_request($url, $data)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        if (! empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $output = curl_exec($curl);
        curl_close($curl);
        return $output;
    }

     
   
}

?>