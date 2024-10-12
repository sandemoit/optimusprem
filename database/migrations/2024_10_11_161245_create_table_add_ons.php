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
            $table->string('url_midtrans');
            $table->string('id_marchant_midtrans');
            $table->string('server_key_midtrans');
            $table->string('client_key_midtrans');
            $table->string('url_digi_flazz');
            $table->string('username_digi_flazz');
            $table->string('key_digi_flazz');
            $table->string('token_wagw');
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
