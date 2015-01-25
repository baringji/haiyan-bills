<?php

class FilesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 5; $i++) {
            DB::table('files')->insert(array(
                'file_name'    => $faker->file(),
                'file_type'    => 'USERS',
                'file_type_id' => 1,
                'is_primary'   => ($i == 1) ? true : false
            ));
        }

        for ($i = 1; $i <= 25; $i++) {
            DB::table('files')->insert(array(
                'file_name'    => $faker->file(),
                'file_type'    => 'BILLS',
                'file_type_id' => rand(1, 50),
                'is_primary'   => false
            ));
        }

        for ($i = 1; $i <= 25; $i++) {
            DB::table('files')->insert(array(
                'file_name'    => $faker->file(),
                'file_type'    => 'RECEIPTS',
                'file_type_id' => rand(1, 10),
                'is_primary'   => false
            ));
        }
    }

}