<?php

class BillsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 50; $i++) {
            DB::table('bills')->insert(array(
                'name'         => $faker->company,
                'amount'       => $faker->randomFloat(4, 0, 999999),
                'due_date'     => $faker->dateTimeThisMonth(),
                'period_start' => $faker->dateTimeThisMonth(),
                'period_end'   => $faker->dateTimeThisMonth(),
                'details'      => $faker->realText(),
                'user_id'      => rand(1, 3),
                'status'       => 'O'
            ));
        }
    }

}