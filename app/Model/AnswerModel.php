<?php

    namespace App\Model;
    use Illuminate\Support\Facades\DB;

    class AnswerModel {
        public static function getAll() {
            $answer = DB::table('answer')->get();
            return $answer;
        }

        public static function save($data) {
            $new_answer = DB::table('answer')->insert($data);
            return $new_answer;
        }

        public static function find($jawaban) {
            $answer = DB::table('answer')->where('id_jawaban',$id_jawaban)->get();
            return $answer;
        }
    }
?>