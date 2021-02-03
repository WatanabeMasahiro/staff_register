<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MattersTableSeeder extends Seeder
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
            'sub_staff_id' => 1,
            'punchin_staff_id' => 2,
            'name' => 'abc株式会社、搬入',
            'day' => '2020/08/10',
            'place' => '代々木公園',
            'start_time' => '09:00',
            'ending_time' => '17:30',
            'work_time' => 8.5,
            'production_time' => 7.5,
            'over_time' => '残業あり【1時間】',
            'wage' => 7500,
            'travel_cost' => 500,
            'scp_a' => 'なし',
            'min_g' => '3000円（待機人員も同一）',
            'people_number' => 4,
            'detail' => '【作業内容】音楽機器の搬入',
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',
            'belongings' => '【持ち物】ゴム軍手、飲み物',
        ];
        DB::table('matters')->insert($param);

        $param = [
            'staff_id' => 2,
            'sub_staff_id' => 3,
            'punchin_staff_id' => 1,
            'name' => 'abc株式会社、搬入',
            'day' => '2022/08/10',
            'place' => '代々木公園',
            'start_time' => '09:00',
            'ending_time' => '17:30',
            'work_time' => 8.5,
            'production_time' => 7.5,
            'over_time' => '残業あり【1時間】',
            'wage' => 7500,
            'travel_cost' => 500,
            'scp_a' => 'なし',
            'min_g' => '3000円（待機人員も同一）',
            'people_number' => 4,
            'detail' => '【作業内容】音楽機器の搬入',
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',
            'belongings' => '【持ち物】ゴム軍手、飲み物',
        ];
        DB::table('matters')->insert($param);

        $param = [
            'staff_id' => 3,
            'sub_staff_id' => 3,
            'punchin_staff_id' => 3,
            'name' => 'hk株式会社、引っ越し',
            'day' => '2022/08/11',
            'place' => '',
            'start_time' => '09:00',
            'ending_time' => '08:00',
            'work_time' => 9,
            'production_time' => 8,
            'over_time' => '残業なし',
            'wage' => 8000,
            'travel_cost' => 500,
            'scp_a' => 'なし',
            'min_g' => '1000円（待機人員も同一）',
            'people_number' => 3,
            'detail' => '【作業内容】個人宅の引っ越し',
            'remarks' => '【備考】現地集合【住所：、〇〇】。【注意】前日から熱がある方不可',
            'belongings' => '【持ち物】ゴム軍手、飲み物、白靴下',
        ];
        DB::table('matters')->insert($param);
    }
}
