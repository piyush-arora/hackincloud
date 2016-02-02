<?php

use Illuminate\Database\Seeder;

class ThingsTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('things')->delete();

        $things = array(
            ['id' => 1, 'name' => 'Thing 1', 'project_id' => 1, 'type' => 'embedded' ,'code'=> 'My first code', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Thing 2', 'project_id' => 1, 'type' => 'cloud' ,'code'=> 'My second code', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Thing 3', 'project_id' => 1, 'type' => 'smart_phone' ,'code'=> 'My third code', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Thing 1', 'project_id' => 2, 'type' => 'embedded' ,'code'=> 'My first code', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Thing 1', 'project_id' => 3, 'type' => 'embedded' ,'code'=> 'My first code', 'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        //// Uncomment the below to run the seeder
        DB::table('things')->insert($things);
    }

}