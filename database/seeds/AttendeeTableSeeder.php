<?php

use Illuminate\Database\Seeder;

class AttendeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Attendee::class, 5)->create()->each(function($attendee) {
        	$attendee->save();
        });
    }
}
