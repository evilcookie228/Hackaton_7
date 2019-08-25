<?php

use Illuminate\Database\Seeder;

class BurosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('buros')->insert(
            ['name' => 'RU']  
        );
         DB::table('buros')->insert(
            ['name' => 'EU']  
        );
           $this->command->info('Таблица типы патентов заполнена данными!');
    }
}
