<?php


use Illuminate\Database\Seeder;
use Wundership\Keyword;

class KeywordTableSeeder extends Seeder{

    public function run()
    {
        Keyword::create([
            'id'        => 1,
            'keyword'   => 'peace'
        ]);

        DB::table('keyword_question')->insert([
            [
                'id' => 1,
                'keyword_id' => 1,
                'question_id' => 1
            ],
        ]);
    }
}