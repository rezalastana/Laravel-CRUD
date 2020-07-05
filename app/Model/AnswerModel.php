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

        public static function find($is_selected) {
            $answer = DB::table('answer')->where('is_selected',$is_selected)->get();
            return $answer;
        }
    }
?>