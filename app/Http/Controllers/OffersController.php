<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class OffersController extends Controller
{
    /**
     * @var array
     */
    public $data = [];

    /**
     * OffersController constructor.
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
        return view("offers.offers_list", $this->data);
    }

    public function getOffer(){
        return view("offers.offers_details", $this->data);
    }

}
