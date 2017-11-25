<?php 
namespace app\index\validate;
use think\Validate;
//用户名注册服务器端认证
class User extends Validate{
    protected $rule = [
        'username'=>'require|max:25',
        'password'=>'require|max:25',
        'phone'=>'require|number'
        
    ];
    protected $message = [
        'username.require'=>'用户名必填',
        'username.max'=>  '用户名不能超过25位',
        'password.require'=>'密码必填',
        'phone.require'=>'手机必填',
        'phone.number'=>'手机必须为数字',
    ];
    
    
    
    
}



?>