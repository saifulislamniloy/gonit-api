<?php

namespace App\Http\Controllers;

use App\VideoModel;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function onNewVideoData(Request $req){
        $ContactArray=  json_decode($req->getContent(),true);
        $id = $ContactArray['id'];
        $title = $ContactArray['title'];
        $link = $ContactArray['link'];
        $result = VideoModel::insert(['id'=>$id, 'title'=>$title, 'link'=>$link]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    function onSelectVideoeDataFilterByChapter($chapId){
        $id = strval( $chapId )."-";
        $result = VideoModel::where('id', 'LIKE', $id.'%' )->get();
        return $result;
    }
}
