<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\AnswerModel;

class AnswerController extends Controller
{
    public function index($answer){
        $jawaban = answerModel::find($answer);
        return view('/items/answerview',compact('jawaban'));
    }

    public function store(Request $request){
        $data_request = $request->all();
        unset($data_request["_token"]);

        $answer = answerModel::save($data_request);

        if($answer){
            return redirect()->route('jawaban.index');
        }
    }
}
