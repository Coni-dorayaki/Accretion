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
            'name' => '東方仗助',
            'email' => 'zumi@zumi.com',
            'companyName' => 'クレイジーダイヤモンド',
            'useMachine' => 'スタンド使い',
            'telNumber' => '080-0000-0000',
            'address' => 'ドラララララ',
            'password' => Hash::make('aaaaa000'),
        ]);
    }
}
