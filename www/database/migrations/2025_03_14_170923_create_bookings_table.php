<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('lang');
            $table->string('type'); // can be: instant, reservation, cruise, airport, route
            $table->string('airport');
            $table->string('port');
            $table->string('date');
            $table->string('time');
            $table->string('origin');
            $table->string('destination');

            $table->string('name');
            $table->string('email');
            $table->string('phone');

            $table->string('deletion_code');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
