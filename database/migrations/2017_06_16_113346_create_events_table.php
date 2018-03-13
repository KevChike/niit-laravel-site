<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->text('event_title');
            $table->longText('event_description');
            $table->string('uid')->unique();
            $table->string('event_type');
            $table->timestamp('event_start_date')->nullable();
            $table->timestamp('event_end_date')->nullable();
            $table->string('event_time')->nullable();
            $table->timestamp('registration_start_date')->nullable();
            $table->timestamp('registration_end_date')->nullable();
            $table->text('slug');
            $table->boolean('live')->default(0);
            $table->timestamp('posted_on')->nullable();
            $table->string('niit_center');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
