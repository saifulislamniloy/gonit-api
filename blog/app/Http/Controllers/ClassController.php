<?php

namespace App\Http\Controllers;

use App\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    function onNewClassData(Request $req){
        $ContactArray=  json_decode($req->getContent(),true);
        $id = $ContactArray['id'];
        $clas = $ContactArray['clas'];
        $result = ClassModel::insert(['id'=>$id, 'class'=>$clas]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    function onSelectClassData(){
        $result = ClassModel::all();
        return $result;
    }
}
