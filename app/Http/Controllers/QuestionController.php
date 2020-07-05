<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\QuestionModel;
use App\Model\AnswerModel;

class QuestionController extends Controller
{
    public function index(){
        $question = QuestionModel::getAll();
        return view('item/questionview', compact('question'));
    }

    public function create(){
        return view('/item/questionform');
    }

    public function store(Request $request) {
        $data_request = $request->all();
        unset($data_request["_token"]);


        $question = QuestionModel::save($data_request);

        if($question){
        return redirect()->route('question.index');  
        }
    }

    public function show($id_pertanyaan) {
        $question = QuestionModel::find($id_pertanyaan);
        $jawaban = AnswerModel::find($id_pertanyaan);

        return view('/item/detail_question_answer',compact('question','jawaban'));
    }
}
