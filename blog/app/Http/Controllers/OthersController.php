<?php

namespace App\Http\Controllers;

use App\OthersModel;

class OthersController extends Controller
{
    function onSelectOthersData($name){
        $name = $name;
        $result = OthersModel::where(['name'=>$name])->get();
        return $result;
    }
}
