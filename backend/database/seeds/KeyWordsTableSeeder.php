<?php

use Illuminate\Database\Seeder;

class KeyWordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('key_words')->insert(
            ['pat_id' => 1 , // 1 патент
            'word_id' => 1] 
        );
          DB::table('key_words')->insert(
            ['pat_id' => 1 , // 1 патент
            'word_id' => 2] 
        );
          DB::table('key_words')->insert(
            ['pat_id' => 1 , // 1 патент
            'word_id' => 3] 
        );
           DB::table('key_words')->insert(
            ['pat_id' => 2 , // 1 патент
            'word_id' => 4] 
        );
           DB::table('key_words')->insert(
            ['pat_id' => 2, // 1 патент
            'word_id' => 5] 
        );
           DB::table('key_words')->insert(
            ['pat_id' => 3, // 1 патент
            'word_id' => 6] 
        );
           DB::table('key_words')->insert(
            ['pat_id' => 2, // 1 патент
            'word_id' => 7] 
        );
           DB::table('key_words')->insert(
            ['pat_id' => 2, // 1 патент
            'word_id' => 8] 
        );

           $this->command->info('Таблица ключевых слов заполнена данными!');
    }
}
