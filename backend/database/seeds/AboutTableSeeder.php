<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert(
            ['message' => 'Биржа патентов помогает продавать и покупать изобретения!','show' => TRUE]  
        );
        DB::table('abouts')->insert(
            ['message' => 'Купите изобретение или возьмите его в аренду и постройте эффективный бизнес!',
          'show' => TRUE]  
        );
        DB::table('abouts')->insert(
            ['message' => 'Придумайте и зарегистрируйте изобретение, затем его продайте или сдайте в аренду!',
          'show' => TRUE]  
        );
           $this->command->info('Таблица abouts заполнена данными!');
    }
}
