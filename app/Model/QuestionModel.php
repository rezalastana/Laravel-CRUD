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

        public static function find($id_pertanyaan) {
            $question = DB::table('question')->where('id_pertanyaan',$id_pertanyaan)->first();
            return $question;
        }

        public static function update($data) {
            $update = DB::table('question')->where('id_pertanyaan',$data['id_pertanyaan'])->update($data);
            return $update;
        }

        public static function delete($id_pertanyaan) {
            $question = DB::table('question')->where('id_pertanyaan',$id_pertanyaan)->delete();
            return 'deleted';
        }

    }
?>