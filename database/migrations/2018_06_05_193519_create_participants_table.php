<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lottery_id')->nullable();
            $table->string('firstName',32);
            $table->string('lastName',32);
            $table->string('phone',16)->unique();
            $table->string('email',100)->unique();
            $table->string('code',16)->unique();
            $table->boolean('valid')->default(true);
            $table->boolean('winner')->default(false);
            $table->boolean('redeemed')->default(false);
            $table->ipAddress('ip_address')->nullable();
            $table->unsignedInteger('location_id')->nullable();
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
        Schema::dropIfExists('participants');
    }
}
