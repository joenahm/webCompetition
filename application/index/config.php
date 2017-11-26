<?php

return [
    'view_replace_str'  =>  [
        '__PUBLIC__' => SITE_URL.'/public/static',
        '__PHOTO__' =>PHOTO,
        '__RAND__' =>'?v'.rand(),
    ],
    'url_route_on'  =>  false,

    'auto_timestamp' => true,
    'app_debug'   => true,
    'view_path'    => '',

];
