<?php

use Illuminate\Database\Seeder;

class PatentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patents')->insert(
            ['buro_id' => 1,'created_at' => now(),
            'updated_at' => now(),
       'patent_type' => 2,
       'patent_num' => 191000,
       'date_from' => now(),
       'author' => 'Ермаков Михаил Валерьевич (RU)',
       'pname' => 'ДЕТСКИЙ БЕГОВОЙ ВЕЛОСИПЕД',
       'status' => 2
        ]
        );
        DB::table('patents')->insert(
            ['buro_id' => 1,'created_at' => now(),
            'updated_at' => now(),
       'patent_type' => 2,
       'patent_num' => 191001,
       'date_from' => now(),
       'author' => 'Чичурин Александр Геннадьевич (RU),
Шураев Олег Петрович (RU),
Чичурин Александр Александрович (RU)',
       'pname' => 'Котельная установка',
       'status' => 2
        ]
        );
DB::table('patents')->insert(
            ['buro_id' => 1,'created_at' => now(),
            'updated_at' => now(),
       'patent_type' => 2,
       'patent_num' => 191002,
       'date_from' => now(),
       'author' => 'Присяжная Серафима Павловна (RU),
Присяжная Ирина Михайловна (RU),
Шурбин Дмитрий Анатольевич (RU),
Малышев Денис Викторович (RU)',
       'pname' => 'Инжекторная газовая горелка',
       'status' => 2
        ]
        );

        $this->command->info('Таблица patents заполнена данными!');
    }
}
