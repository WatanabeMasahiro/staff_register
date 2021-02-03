<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matters', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');            //スタッフID
            $table->integer('subStaff_id');         //待機スタッフID
            $table->integer('punchin_staff_id');    //出勤スタッフID
            $table->text('name');                   //案件名、会社名
            $table->datetime('day');                //作業日
            $table->text('place');                  //作業場所
            $table->time('start_time');         //開始時間
            $table->time('ending_time');        //終了時間
            $table->integer('work_time');           //拘束時間
            $table->integer('production_time');     //実動時間
            $table->text('over_time');              //残業の可能性・時間
            $table->integer('wage');                //賃金
            $table->integer('travel_cost');         //交通費
            $table->text('scp_a');                  //別途手当
            $table->text('min_g');                  //最低保証
            $table->integer('people_number');       //募集人数
            $table->text('detail');                 //作業内容
            $table->text('remarks');                //備考・注意
            $table->text('belongings');             //持ち物
            $table->timestamps();                   //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matters');
    }
}
