<?php


use Illuminate\Database\Seeder;
use Wundership\Category;

class CategoryTableSeeder extends Seeder{

    public function run()
    {
        Category::create([
            'id'            => 1,
            'name'          => 'Peter',
            'description'   => 'Peter ist ein toller Kerl!'
        ]);

        DB::table('category_question')->insert([
            [
                'id' => '1',
                'category_id' => '1',
                'question_id' => '1'
            ],
        ]);
    }
}