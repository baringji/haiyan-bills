<?php

class ReceiptsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table('receipts')->insert(array(
                'amount'  => $faker->randomFloat(4, 0, 999999),
                'bill_id' => rand(1, 50)
            ));
        }
    }

}