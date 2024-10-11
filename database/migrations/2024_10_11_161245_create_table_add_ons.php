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
        Schema::create('add_ons', function (Blueprint $table) {
            $table->id();
            $table->string('urlMidtrans');
            $table->string('idMarchantMidtrans');
            $table->string('serverKeyMidtrans');
            $table->string('clientKeyMidtrans');
            $table->string('urlDigiFlazz');
            $table->string('usernameDigiFlazz');
            $table->string('keyDigiFlazz');
            $table->string('tokenWAGW');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_ons');
    }
};
