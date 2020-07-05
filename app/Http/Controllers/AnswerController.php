<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AnswerModel;

class AnswerController extends Controller
{
    public function store($is_selected, Request $request){
        $data_request = $request->all();
        unset($data_request["_token"]);

        $answer = AnswerModel::save($data_request);

        if($answer){
            return redirect()->route('question.index'); 
        }
    }

    public function index($is_selected){
        $jawaban = AnswerModel::find($is_selected);
        return view('/item/answerview',compact('jawaban'));
    }
}
