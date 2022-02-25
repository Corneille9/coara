<?php

namespace App\Http\Controllers;

use Encore\Admin\Layout\Content;
use Encore\Admin\Widgets\Box;
use Illuminate\Http\Request;

class ChartjsController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Chartjs')
            ->body(new Box('Bar chart', view('admin.chartjs')));
    }
}
