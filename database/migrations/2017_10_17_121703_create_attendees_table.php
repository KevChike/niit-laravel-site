<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender')->nullable();
            $table->string('email');
            $table->string('uid')->unique();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('city_of_residence')->nullable();
            $table->string('attendee_current_status')->nullable();
            $table->string('event_id')->nullable();
            $table->timestamp('posted_on')->nullable();
            $table->boolean('checked_in')->default(0);
            $table->timestamp('check_in_time')->nullable();
            $table->timestamps();

            $table->foreign('event_id')->references('uid')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendees');
    }
}
