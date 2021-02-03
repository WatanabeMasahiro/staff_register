<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'staff_id' => 1,
            'title' => 'テスト１',
            'text' => 'サンプル　サンプル　サンプル',

        ];
        DB::table('contacts')->insert($param);

        $param = [
            'staff_id' => 2,
            'title' => 'テスト２',
            'text' => 'サンプル　サンプル　サンプル',
        ];
        DB::table('contacts')->insert($param);

        $param = [
            'staff_id' => 3,
            'title' => 'test3',
            'text' => 'サンプル　サンプル　サンプル',
        ];
        DB::table('contacts')->insert($param);
    }
}
