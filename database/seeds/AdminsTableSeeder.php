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
            'name' => '岸辺露伴',
            'companyName' => 'ヘブンズドア',
            'belongs' => 'だが断る',
            'email' => 'zumi@zumi.com',
            'password' => Hash::make('aaaaa000'),
        ]);
    }
}
