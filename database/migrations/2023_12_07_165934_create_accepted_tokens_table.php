<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('accepted_tokens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('token_request_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('token_request_id')->references('id')->on('token_requests');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accepted_tokens');
    }
};
