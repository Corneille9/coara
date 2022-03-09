<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class CompanyTablesControllers extends Controller
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
        return view("company.tables", $this->data);
    }

    public function importData(Request $request){
        if($request->hasFile("file")){
            if ($request->type == "json") {
                return json_decode(file_get_contents($request->file), true);
            }elseif ($request->type == "csv"){
                $rows = array_map("str_getcsv", file($request->file));
                $header = array_shift($rows);
                $csv = array();
                foreach ($rows as $row){
                    $csv[] = array_combine($header, $row);
                }
                return $csv;
            }
        }
        return ["success"=>false];
    }
}
