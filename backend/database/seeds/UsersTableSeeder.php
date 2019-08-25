<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['name' => 'Superadmin','created_at' => now(),
            'updated_at' => now(),
       'ouner_name' => 'Superadmin',
       'email' => 'admin@admin.com',
       'email_verified_at' => now(),
        'password' =>  bcrypt('pass'),
        'remember_token' => str_random(10),
        ]
        );
        DB::table('users')->insert(
            ['name' => 'Ермаков Михаил','created_at' => now(),
            'updated_at' => now(),
       'ouner_name' => 'ООО Мегарион (RU)',
       'email' => '1@admin.com',
       'email_verified_at' => now(),
        'password' =>  bcrypt('pass'),
        'remember_token' => str_random(10),
        ]
        );
        DB::table('users')->insert(
            ['name' => 'Чичурин Александр','created_at' => now(),
            'updated_at' => now(),
       'ouner_name' => 'Федеральное государственное бюджетное образовательное учреждение высшего образования "Волжский государственный университет водного транспорта" (ФГБОУ ВО "ВГУВТ") (RU)',
       'email' => '2@admin.com',
       'email_verified_at' => now(),
        'password' =>  bcrypt('pass'),
        'remember_token' => str_random(10),
        ]
        );
        DB::table('users')->insert(
            ['name' => 'Присяжная Серафима','created_at' => now(),
            'updated_at' => now(),
       'ouner_name' => 'Федеральное государственное бюджетное образовательное учреждение высшего образования "Амурский государственный университет" (RU)',
       'email' => '3@admin.com',
       'email_verified_at' => now(),
        'password' =>  bcrypt('pass'),
        'remember_token' => str_random(10),
        ]
        );
        $this->command->info('Таблица users заполнена данными!');
    }
}
