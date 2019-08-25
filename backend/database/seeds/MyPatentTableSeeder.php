<?php

use Illuminate\Database\Seeder;

class MyPatentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_patents')->insert(
            ['user_id' => 1 , 
            'pat_id' => 1 ,
            'sell_cost' => 38000] 
        );
        DB::table('my_patents')->insert(
            ['user_id' => 2 , 
            'pat_id' => 2 ,
            'rent_cost' => 3000] 
        );
        DB::table('my_patents')->insert(
            ['user_id' => 3 , 
            'pat_id' => 3 ,
            'sell_cost' => 50000,
            'rent_cost' => 2000] 
        );
           $this->command->info('Таблица my_patents заполнена данными!');
    }
}
