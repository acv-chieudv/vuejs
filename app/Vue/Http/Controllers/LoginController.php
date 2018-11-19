<?php

namespace App\Vue\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Auth\Models\User;
use Illuminate\Http\Request;
use Validator;
use DateTime;
use Illuminate\Support\Facades\Config;



class LoginController extends BaseController
{

    public function index()
    {
        return view('vue.login');
    }

}



?>