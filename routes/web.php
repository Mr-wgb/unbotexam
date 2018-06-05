<?php
// 首页
$app['router']->get('/', 'App\Controllers\HomeController@index');

// 创建BBS
$app['router']->post('/bbs/create', 'App\Controllers\BbsController@create');
