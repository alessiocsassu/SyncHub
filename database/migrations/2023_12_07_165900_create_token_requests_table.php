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
        Schema::create('token_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hub_id');
            $table->string('token');
            $table->unsignedBigInteger('created_by');
            $table->foreign('hub_id')->references('id')->on('hubs');
            $table->foreign('created_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('token_requests');
    }
};
