<?php

namespace App\Http\Controllers;

use App\ChapterModel;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    function onNewChapterData(Request $req){
        $ContactArray=  json_decode($req->getContent(),true);
        $id = $ContactArray['id'];
        $chapter = $ContactArray['chapter'];
        $result = ChapterModel::insert(['id'=>$id, 'chapter'=>$chapter]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    function onSelectChapterDataFilterBySubject($subId){
        $id = strval( $subId )."-";
        $result = ChapterModel::where('id', 'LIKE', $id.'%' )->get();
        return $result;
    }
}
