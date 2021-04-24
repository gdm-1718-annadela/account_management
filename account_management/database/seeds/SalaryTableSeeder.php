<?php

use Illuminate\Database\Seeder;

class SalaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salary')->insert([
            [
                'id' => '1',
                'field_salary_name' => 'Brutoloon',
                'field_salary_amount' => 0,
                'field_salary_system_name' => 'system_salary_gross'
            ],[
                'id' => '2',
                'field_salary_name' => 'Bijdrage voor sociale zekerheid',
                'field_salary_amount' => 0,
                'field_salary_system_name' => 'system_salary_rsz'
            ],[
                'id' => '3',
                'field_salary_name' => 'Werkbonus',
                'field_salary_amount' => 0,
                'field_salary_system_name' => 'system_salary_bonus'
            ],[
                'id' => '4',
                'field_salary_name' => 'Voorheffing op normale bezoldingen',
                'field_salary_amount' => 0,
                'field_salary_system_name' => 'system_salary_withholding_tax'
            ],[
                'id' => '5',
                'field_salary_name' => 'Vermindering van bedrijfsvoorheffing voor lage lonen',
                'field_salary_amount' => 0,
                'field_salary_system_name' => 'system_salary_reduction'
            ],[
                'id' => '6',
                'field_salary_name' => 'Bijzondere bijdrage sociale zekerheid',
                'field_salary_amount' => 0,
                'field_salary_system_name' => 'system_salary_srsz'
            ],[
                'id' => '7',
                'field_salary_name' => 'Persoonlijke bijdrage maaltijdcheques',
                'field_salary_amount' => 0,
                'field_salary_system_name' => 'system_salary_contribution'
            ],[
                'id' => '8',
                'field_salary_name' => 'Nettoloon',
                'field_salary_amount' => 0,
                'field_salary_system_name' => 'system_salary_net'
            ],[
                'id' => '9',
                'field_salary_name' => 'Maandelijks doel',
                'field_salary_amount' => 0,
                'field_salary_system_name' => 'system_salary_goal'
            ],
        ]);
    }
}
