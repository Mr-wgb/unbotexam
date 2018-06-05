<?php

namespace App\Controllers;

use App\Models\Bbs;
use Illuminate\Container\Container;

class BbsController extends Controller
{
    // 创建BBS
    public function create() {
        $name = $_REQUEST['name'];
        $comment = $_REQUEST['comment'];

        // name和comment同时输入正确的情况下，插入数据库
        if (!empty($name) && !empty($comment)) {
            $model = new Bbs;
            $model->name = $name;
            $model->comment = $comment;
            $model->created_at = date("Y-m-d H:i:s");
            $model->save();
        }

        // 跳转
        header("location: /");
        exit;
    }
}
