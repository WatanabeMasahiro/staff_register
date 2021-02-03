<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '派遣　太郎',
            'email' => 'haken@taro.jp',
            'password' => '12345678',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '登録　一郎',
            'email' => 'touroku@ichiro.jp',
            'password' => '87654321',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '最高　一番',
            'email' => 'saiko@ichiban.com',
            'password' => 'rrrr1111',
        ];
        DB::table('users')->insert($param);
    }
}
