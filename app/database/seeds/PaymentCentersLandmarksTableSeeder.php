<?php

class PaymentCentersLandmarksTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            DB::table('payment_centers_landmarks')->insert(array(
                'payment_center_id' => rand(1, 50),
                'landmark_id'       => rand(1, 50)
            ));
        }
    }

}
