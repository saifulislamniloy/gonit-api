<?php

namespace App\Http\Controllers;

use App\BannerModel;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    function onAllSelect()
    {
        $result = BannerModel::select('id', 'title', 'subtitle', 'subtitle2')->get();
        return $result;
    }
}
