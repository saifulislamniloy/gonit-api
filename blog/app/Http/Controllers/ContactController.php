<?php

namespace App\Http\Controllers;

use App\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function onContactSend(Request $req){
        $ContactArray=  json_decode($req->getContent(),true);
        $name = $ContactArray['name'];
        $mobile = $ContactArray['mobile'];
        $msg = $ContactArray['msg'];
        $result = ContactModel::insert(['name'=>$name, 'mobile'=>$mobile, 'message'=>$msg]);
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }
}
