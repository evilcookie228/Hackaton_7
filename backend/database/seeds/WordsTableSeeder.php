<?php

use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert(
            ['name' => 'ВЕЛОСИПЕД' , // 1
            'qty' => 1 ,
            'type' => true] 
        );
         DB::table('words')->insert(
            ['name' => 'БЕГ' , // 2
            'qty' => 1 ,
            'type' => true] 
        );
         DB::table('words')->insert(
            ['name' => 'РУЛЬ' , // 3
            'qty' => 1 ,
            'type' => true] 
        );
         DB::table('words')->insert(
            ['name' => 'КОТЕЛ', // 4
            'qty' => 1 ,
            'type' => true] 
        );
         DB::table('words')->insert(
            ['name' => 'УСТАНОВКА' , // 5
            'qty' => 1 ,
            'type' => true] 
        );
         DB::table('words')->insert(
            ['name' => 'ИНЖЕКТОР' , // 6
            'qty' => 1 ,
            'type' => true] 
        );
         DB::table('words')->insert(
            ['name' => 'ГАЗ' , // 7
            'qty' => 1 ,
            'type' => true] 
        );
         DB::table('words')->insert(
            ['name' => 'ГОРЕЛКА' , // 8
            'qty' => 1 ,
            'type' => true] 
        );
           $this->command->info('Таблица words заполнена данными!');
    }
}
