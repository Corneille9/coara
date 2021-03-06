<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class RegisteredUserController extends Controller
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

    /**
     * Display the registration view.
     *
     * @return View
     */
    public function create()
    {
        return view('auth.register', $this->data);
    }

    /**
     * Display the registration view.
     *
     * @param Request $request
     * @return View
     */

    public function create2(Request $request)
    {
        if (isset($request->account_type)){
            if ($request->account_type == "personal"){
                return view('auth.personal_account_register', $this->data);
            }else if ($request->account_type == "company"){
                return view('auth.company_account_register', $this->data);
            }
        }
        return $this->create();
    }
}
