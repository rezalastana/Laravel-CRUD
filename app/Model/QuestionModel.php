<?php

    namespace App\Model;
    use Illuminate\Support\Facades\DB;

    class QuestionModel {
        public static function getAll() {
            $question = DB::table('question')->get();
            return $question;
        }

        public static function save($data) {
            $new_question = DB::table('question')->insert($data);
            return $new_question;
        }
    }
?>