<?php

use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stories')->insert(
            ['message' => '3 января 1888 года владелец фабрики по производству бумажных сигаретных мундштуков Марвин Стоун получил в Вашингтонском патентным бюро документы на изобретение бумажной соломки для питья коктейлей и прочих жидкостей. 
уже в 1890 году его основным бизнесом стало изготовление соломок для коктейлей. Во всяком случае, это приносило гораздо больший доход, чем производство сигаретных мундштуков
Источник: https://i-fakt.ru',
          'show' => true]  
        );
        DB::table('stories')->insert(
            ['message' => 'Ирония судьбы: Папен изобрёл первую удачную работающую паровую машину с поршнем, но его имя в истории осталось лишь в связи с изобретением бытового прибора — скороварки. Когда изобретение приобрело популярность, его стали называть как-то вроде «Варилка Папена»
Источник: © Shkolazhizni.ru',
          'show' => true]  
        );
           $this->command->info('Таблица бюро заполнена данными!');
    }
}
