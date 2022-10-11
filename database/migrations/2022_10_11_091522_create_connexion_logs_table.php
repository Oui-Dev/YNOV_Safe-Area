<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connexion_logs', function (Blueprint $table) {
            $table->id();
            $table->longText('domain');
            $table->enum('status', ['connexion', 'deconnexion']);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->ipAddress('ip_address');
            $table->longText('user_agent');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('connexion_logs');
    }
};
