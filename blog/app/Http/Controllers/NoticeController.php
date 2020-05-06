<?php

namespace App\Http\Controllers;

use App\NoticeModel;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    function onAllSelect(){
        $result = NoticeModel::all();
        return $result;
    }
}
