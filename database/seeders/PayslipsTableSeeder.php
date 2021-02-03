<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayslipsTableSeeder extends Seeder
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
            'start_period' => '2021/02/02',
            'end_period' => '2021/02/04',
            'payment_date' => '2021/02/08',
            'total_amount_paid' => 20000,
            'total_amount_deducted' => 2000,
            'deduction_payment_amount' => 18000,
            'basic_salary' => 15000,
            'overtime_extrawage' => 2000,
            'midnight_extrawage' => 1000,
            'total_travelcost' => 500,
            'taxable_portion_travelcost' => 0,
            'tax_exempt' => 500,
            'withholding_tax' => 500,
        ];
        DB::table('payslips')->insert($param);

        $param = [
            'staff_id' => 1,
            'start_period' => '2021/02/05',
            'end_period' => '2021/02/10',
            'payment_date' => '2021/02/14',
            'total_amount_paid' => 20000,
            'total_amount_deducted' => 2000,
            'deduction_payment_amount' => 18000,
            'basic_salary' => 15000,
            'overtime_extrawage' => 2000,
            'midnight_extrawage' => 1000,
            'total_travelcost' => 500,
            'taxable_portion_travelcost' => 0,
            'tax_exempt' => 500,
            'withholding_tax' => 500,
        ];
        DB::table('payslips')->insert($param);

        $param = [
            'staff_id' => 3,
            'start_period' => '2021/02/02',
            'end_period' => '2021/02/04',
            'payment_date' => '2021/02/08',
            'total_amount_paid' => 20000,
            'total_amount_deducted' => 2000,
            'deduction_payment_amount' => 18000,
            'basic_salary' => 15000,
            'overtime_extrawage' => 2000,
            'midnight_extrawage' => 1000,
            'total_travelcost' => 500,
            'taxable_portion_travelcost' => 0,
            'tax_exempt' => 500,
            'withholding_tax' => 500,
        ];
        DB::table('payslips')->insert($param);
    }
}
