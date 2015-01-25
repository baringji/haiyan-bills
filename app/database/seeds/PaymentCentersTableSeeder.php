<?php

class PaymentCentersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 50; $i++) {
            DB::table('payment_centers')->insert(array(
                'name'      => $faker->company,
                'address'   => $faker->streetAddress,
                'city'      => $faker->city,
                'country'   => $faker->country,
                'zip'       => $faker->postcode,
                'latitude'  => $faker->latitude,
                'longitude' => $faker->longitude
            ));
        }
    }

}
