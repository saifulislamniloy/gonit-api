<?php

namespace App\Http\Controllers;

use App\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function onAllSelect(){
        $result = BlogModel::select('id', 'title', 'writer')->get();
        return $result;
    }
    function onSelectDetails($blogId){
        $id = $blogId;
        $result = BlogModel::where(['id'=>$id])->get();
        return $result;
    }
    function onSelectHomePage(){
        $result = BlogModel::limit(3)->get();
        return $result;
    }

}
