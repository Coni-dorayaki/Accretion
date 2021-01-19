<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => '1',
            'name' => '小泉龍也',
            'belongs' => '東精エンジニアリング',
            'email' => 'zumi@zumi.com',
            'password' => Hash::make('aaaaa000'),
        ]);
    }
}
