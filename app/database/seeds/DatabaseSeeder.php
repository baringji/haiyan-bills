<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('UsersTableSeeder');
        $this->call('BillsTableSeeder');
        $this->call('ReceiptsTableSeeder');
        //$this->call('FilesTableSeeder');
        $this->call('PaymentCentersTableSeeder');
        $this->call('LandmarksTableSeeder');
        $this->call('PaymentCentersLandmarksTableSeeder');
    }

}
