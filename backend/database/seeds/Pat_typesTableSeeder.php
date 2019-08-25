<?php

use Illuminate\Database\Seeder;

class Pat_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pat_types')->insert(
            ['typename' => 'Изобретения']  
        );
        DB::table('pat_types')->insert(
            ['typename' => 'Полезные модели']  
        );
        DB::table('pat_types')->insert(
            ['typename' => 'Промышленные образцы']  
        );
        DB::table('pat_types')->insert(
            ['typename' => 'Товарные знаки']  
        );
        DB::table('pat_types')->insert(
            ['typename' => 'Наименования мест происхождения товаров']  
        );
         DB::table('pat_types')->insert(
            ['typename' => 'Программы для ЭВМ Базы Данных и Топологии']  
        );
           $this->command->info('Таблица типы патентов заполнена данными!');
    }
}
