<?php


use Illuminate\Database\Seeder;

class CredentialsTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('credentials')->insert([
            'email' => 'vasja930403@yandex.ru'
        ]);
    }
}

