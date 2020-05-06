<?php

namespace App\Http\Controllers;

use App\FooterModel;

class FooterController extends Controller
{
    function onAllSelect(){
        $result = FooterModel::all();
        return $result;
    }
}
