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
            'day' => '2021/08/17',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '17:30',   //終了時刻
            'work_time' => 8.5, //拘束時間
            'production_time' => 7.5,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 7500, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 4,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/18',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/19',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/20',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/21',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/22',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/23',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/24',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/25',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/26',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/27',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/28',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/29',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/08/30',  //作業日
            'client' => 'セキュリティ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/01',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/01',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/02',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/03',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/04',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/05',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/06',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/07',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/08',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/09',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/10',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/11',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/12',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/13',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/14',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/15',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/16',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/17',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/18',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/19',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

        $param = [
            'day' => '2021/09/20',  //作業日
            'client' => 'パンダ施設警備（株）',   //派遣勤務先企業名
            'matter_name' => '会場警備',    //案件名
            'work_name' => '施設警備（立哨）',  //作業名
            'place' => '北里大学病院',  //作業場所
            'place_near_sta' => '相模大野駅',   //最寄駅
            'start_time' => '09:00',    //開始時刻
            'ending_time' => '18:00',   //終了時刻
            'work_time' => 9, //拘束時間
            'production_time' => 8,   //実動時間
            'over_time' => 2,   //残業時間
            'wage' => 8000, //賃金
            'hourly_wage' => 1000,  //時給
            'travel_cost' => 500,   //交通費(賃金別)
            'scp_a' => 'なし',  //別途手当
            'min_g' => '3000円（待機人員も同一）',  //最低保証額
            'people_number' => 8,   //募集人数
            'remarks' => '【備考】代々木駅の改札前に集合。【注意】前日から熱がある方不可',  //備考・注意
            'belongings' => '【持ち物】ゴム軍手、飲み物',   //持ち物
        ];
        DB::table('matters')->insert($param);

    }
}
