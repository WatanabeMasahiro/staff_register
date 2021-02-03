<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'matter_id' => 2,
            'name' => '田中　みなみ',
            'email' => 'tabnaka@minami.com',
            'password' => '12345678',
            'remember_token' => '',
            'tel' => 00000000000,
            'adress' => '東京都港区4-4-4',
            'gender' => '女',
            'remarks' => '2021/04/05：登録',
            'photoId' => '',
        ];
        DB::table('staff')->insert($param);

        $param = [
            'matter_id' => 3,
            'name' => '山田　太郎',
            'email' => 'yamada@taro.com',
            'password' => '87654321',
            'remember_token' => '',
            'tel' => 11111111111,
            'adress' => '東京都町田市3-3-3',
            'gender' => '男',
            'remarks' => '2021/08/12：登録',
            'photoId' => '',
        ];
        DB::table('staff')->insert($param);

        $param = [
            // 'matter_id' => '',
            'name' => '佐藤　エライザ',
            'email' => 'satoh@eee.com',
            'password' => '11223344',
            'remember_token' => '',
            'tel' => 00011112222,
            'adress' => '東京都八王子市3-4-1',
            'gender' => 'その他',
            'remarks' => '2021/09/21：登録',
            'photoId' => '',
        ];
        DB::table('staff')->insert($param);
    }
}
