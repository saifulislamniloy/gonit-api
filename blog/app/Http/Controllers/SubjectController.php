<?php

namespace App\Http\Controllers;

use App\SubjectModel;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    function onNewSubjectData(Request $req){
        $ContactArray=  json_decode($req->getContent(),true);
        $id = $ContactArray['id'];
        $sub = $ContactArray['subject'];
        $result = SubjectModel::insert(['id'=>$id, 'subject'=>$sub]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    function onSelectSubjectData(){
        $result = SubjectModel::all();
        return $result;
    }
    function onSelectSubjectDataFilterByClass($classId){
        $id = strval( $classId )."-";
        $result = SubjectModel::where('id', 'LIKE', $id.'%' )->get();
        return $result;
    }
}
