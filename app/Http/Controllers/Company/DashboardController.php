<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * @var array
     */
    public $data = [];

    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->mode = "Dark";
        $this->resolved_assets = "";
        for($i=1;$i<=substr_count(Route::getCurrentRoute()->uri, "/");$i++){
            $this->resolved_assets .= "../";
        }
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->data[$name];
    }

    /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function index()
    {
        return view("company.dashboards", $this->data);
    }

    public function view()
    {
        return view("company.dashboard_details", $this->data);
    }

    public function new()
    {
        $cht = [
            "reveal-chart-illustration-area.svg",
            "reveal-chart-illustration-bar.svg",
            "reveal-chart-illustration-bubble.svg",
            "reveal-chart-illustration-bullet-graph.svg",
            "reveal-chart-illustration-candlestick.svg",
            "reveal-chart-illustration-choropleth.svg",
            "reveal-chart-illustration-circular.svg",
            "reveal-chart-illustration-column.svg",
            "reveal-chart-illustration-combo.svg",
            "reveal-chart-illustration-custom.svg",
            "reveal-chart-illustration-doughnut.svg",
            "reveal-chart-illustration-funnel.svg",
            "reveal-chart-illustration-grid.svg",
            "reveal-chart-illustration-image.svg",
            "reveal-chart-illustration-kpi.svg",
            "reveal-chart-illustration-line.svg",
            "reveal-chart-illustration-linear.svg",
            "reveal-chart-illustration-ohlc.svg",
            "reveal-chart-illustration-pie.svg",
            "reveal-chart-illustration-pivot-grid.svg",
            "reveal-chart-illustration-radial.svg",
            "reveal-chart-illustration-scatter.svg",
            "reveal-chart-illustration-scatter-map.svg",
            "reveal-chart-illustration-sparkline.svg",
            "reveal-chart-illustration-spline.svg",
            "reveal-chart-illustration-spline-area.svg",
            "reveal-chart-illustration-stacked-bar.svg",
            "reveal-chart-illustration-stacked-column.svg",
            "reveal-chart-illustration-step.svg",
            "reveal-chart-illustration-step-area.svg",
            "reveal-chart-illustration-text.svg",
            "reveal-chart-illustration-text-view.svg",
            "reveal-chart-illustration-time-series.svg",
            "reveal-chart-illustration-treemap.svg",
        ];
        $charts = [];
        $chartImgPath = "app/assets/media/svg/charts/";
        foreach ($cht as $item){
            $chart = [];
            $chart["name"] = ucfirst(trim(str_replace(["-", ".svg"], " ", str_replace("reveal-chart-illustration-","",$item))));
            $chart["path"] = $chartImgPath.$item;
            $chart["slug"] = strtolower(str_replace(' ', '_', $chart["name"]));
            array_push($charts, $chart);
        }

        $data = json_decode(Storage::disk("public")->get("tableData.json"), true)[0];
        $cols = [];
        foreach ($data as $key=>$value){
            if ($key != "id"){
                array_push($cols, $key);
            }
        }

        $this->cols = $cols;
        $this->charts = $charts;
        return view("company.new_dashboard", $this->data);
    }
}
