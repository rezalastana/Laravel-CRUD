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

    public function edit($id_pertanyaan){
        $question= QuestionModel::find($id_pertanyaan);

        return view ('/item/edit_pertanyaan',compact('question','id_pertanyaan'));
    }

    public function update(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);

        $question= QuestionModel::update($data);
        return redirect('/pertanyaan');
    }

    public function delete($id_pertanyaan) {
        QuestionModel::delete($id_pertanyaan);
        return redirect('/pertanyaan');
    }
}
