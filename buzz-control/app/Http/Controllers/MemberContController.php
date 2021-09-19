<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberCont;


class MemberContController extends Controller
{
    function index(){
        #member_contsテーブルに入っているデータをすべて取ってくる
        $member_conts=MemberCont::all();
        #使うビューファイルを指定
        #compactにはビューファイルに送るデータを選択
        return view("member_conts.index",compact("member_conts"));
    }
    //
}
