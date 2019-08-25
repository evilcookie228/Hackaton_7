<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(Pat_typesTableSeeder::class); // Типы патентов
         $this->call(BurosTableSeeder::class); // Патентные бюро
         $this->call(UsersTableSeeder::class); // Пользователи
         $this->call(WordsTableSeeder::class); // Слова
         $this->call(KeyWordsTableSeeder::class); // Ключевые слова
         $this->call(PatentsTableSeeder::class); // Патенты
         $this->call(MyPatentTableSeeder::class); // Мои патенты
         $this->call(AboutTableSeeder::class); // 
         $this->call(StoriesTableSeeder::class); // 


    }
}
