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
            // $table->string('type');
            $table->enum('type', ['unknown', 'instant', 'reservation', 'cruise', 'airport', 'routes']);

            $table->string('airport')->nullable();
            // $table->enum('airport', ['from-granada-airport', 'to-granada-airport', 'from-malaga-airport', 'to-malaga-airport'])->nullable();
            $table->string('port')->nullable();
            // $table->enum('port', ['from-motril-port', 'to-motril-port', 'from-malaga-port', 'to-malaga-port'])->nullable();

            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            $table->string('email_confirmation_code');
            $table->string('deletion_code');
            $table->datetime('deletion_at')->nullable();
            $table->datetime('notify_at')->nullable();

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
