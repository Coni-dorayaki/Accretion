<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' => '山田太郎',
            'email' => 'yamada@yamada.com',
            'password' => Hash::make('aaaaa000'),
            'companyName' => '山田太郎製作所筑波工場',
            'useMachine' => 'AXCEL 9/10/6 RDS XXT',
            'telNumber' => '080-0000-0000',
            'address' => '茨城県つくば市竹園0-0-0',
        ]);
    }
}
