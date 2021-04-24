<?php

use Illuminate\Database\Seeder;

class PeriodTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('period')->insert(
            [
                [
                    'id' => '1',
                    'field_period_name' => 'day',
                    'field_period_multiplier' => 365,
                ],
                [
                    'id' => '2',
                    'field_period_name' => 'week',
                    'field_period_multiplier' => 52,
                ],
                [
                    'id' => '3',
                    'field_period_name' => 'month',
                    'field_period_multiplier' => 12,
                ],
                [
                    'id' => '4',
                    'field_period_name' => 'quarter',
                    'field_period_multiplier' => 4,
                ],
                [
                    'id' => '5',
                    'field_period_name' => 'year',
                    'field_period_multiplier' => 1,
                ],
            ]
        );
    }
}
