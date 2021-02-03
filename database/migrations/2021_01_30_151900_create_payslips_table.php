<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayslipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslips', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');            //スタッフID
            $table->text('period');            //期間
            $table->datetime('payment_date');            //支払日
            $table->integer('total_amount_paid');            //総支給額
            $table->integer('total_amount_deducted');            //総控除額
            $table->integer('deduction_payment_amount');            //差引支給額
            $table->integer('basic_salary');            //基本給
            $table->integer('overtime_extrawage');            //残業・割増賃金
            $table->integer('midnight_extrawage');            //深夜・割増賃金
            $table->integer('total_travelcost');            //総交通費
            $table->integer('taxable_portion_travelcost');            //課税分交通費
            $table->integer('tax_exempt');            //非課税額
            $table->integer('withholding_tax');            //源泉徴収額
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payslips');
    }
}
