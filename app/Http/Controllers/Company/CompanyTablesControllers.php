<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Encore\Admin\Form\Field\Date;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use SplFileObject;
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
        for ($i = 1; $i <= substr_count(Route::getCurrentRoute()->uri, "/"); $i++) {
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

    public function create(Request $request)
    {
        return [
            "success" => true,
            "uid" => Str::random(30),
        ];
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function store(Request $request)
    {
        $request->validate([
            'columns' => 'required',
            'data' => 'required',
            'title' => 'required',
        ]);

        $data = json_decode($request->get("data"), true);

        Storage::disk("public")->put("tableData.json", json_encode($data, JSON_PRETTY_PRINT));
        return json_encode(["success" => true]);
    }

    public function importData(Request $request)
    {
        $request->validate([
            "offset" => "required",
            "length" => "required",
        ]);
        if ($request->hasFile("file")) {
            if ($request->type == "json") {
                $data = json_decode(file_get_contents($request->file), true);
                $size = sizeof($data);
                return ['pageNumber' => ($size % 10 == 0) ? intval($size / 10) : (intval($size / 10) + 1), 'data' => array_slice($data, (int)$request->offset, (int)$request->length),];
            } elseif ($request->type == "csv") {
                $rows = array_map("str_getcsv", file($request->file));
                $header = array_shift($rows);
                $csv = array();
                foreach ($rows as $row) {
                    $csv[] = array_combine($header, $row);
                }
                $size = sizeof($csv);
                return ['pageNumber' => ($size % 10 == 0) ? intval($size / 10) : (intval($size / 10) + 1), 'data' => array_slice($csv, (int)$request->offset, (int)$request->length),];
            }
        }
        return ["success" => false];
    }

    /**
     * @throws FileNotFoundException
     */
    public function getTableData(Request $request)
    {
        $request->validate([
            'uid' => 'required',
            "offset" => "required",
            "length" => "required",
        ]);

        $data = json_decode(Storage::disk("public")->get("tableData.json"), true);
        $size = sizeof($data);
        return [
            'pageNumber' => ($size % 10 == 0) ? intval($size / 10) : (intval($size / 10) + 1),
            'data' => array_slice($data, (int)$request->offset, (int)$request->length),
            "uid" => $request->uid,
        ];
    }

    public function update(Request $request)
    {
        $request->validate([
            'uid' => 'required',
            "offset" => "required",
            "length" => "required",
            "data" => "required",
        ]);

        if ($request->get("columns") !== null) {
            echo "";
        }

        $data = json_decode(Storage::disk("public")->get("tableData.json"), true);

        array_splice($data, (int)$request->get("offset"), (int)$request->get("length"), json_decode($request->get("data"), true));

        Storage::disk("public")->put("tableData.json", json_encode($data, JSON_PRETTY_PRINT));

        return ["success" => true,];
    }

    public function delete(Request $request)
    {
        $request->validate([
            'uid' => 'required',
            "offset" => "required",
            "length" => "required",
            "itemIndex" => "required",
        ]);
    }
}
