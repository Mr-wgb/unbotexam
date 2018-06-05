<?php

namespace App\Controllers;

use App\Models\Bbs;
use Illuminate\Container\Container;

class HomeController extends Controller
{
    // 首页
    public function index() {
        // 全部取出
        $bbses = Bbs::orderBy('id', 'desc')->get();

        // 视图表示
        $app = Container::getInstance();
        $factory = $app->make('view');
        return $factory->make('home')->with('bbses', $bbses);
    }
}
