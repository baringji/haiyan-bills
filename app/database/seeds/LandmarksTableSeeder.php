<?php

class LandmarksTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $type = array('CHURCH', 'BUILDING', 'PARK', 'HOTEL', 'MALL');

        for ($i = 1; $i <= 50; $i++) {
            DB::table('landmarks')->insert(array(
                'name' => $faker->company,
                'type' => $type[array_rand($type)]
            ));
        }
    }

}
