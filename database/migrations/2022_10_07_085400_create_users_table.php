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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->string('identifiant')->unique();
            $table->string('password');
            $table->uuid('reference')->unique();
            $table->integer('sex');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('personal_email');
            $table->string('professional_email');
            $table->string('phone')->nullable();
            $table->timestamp('personal_email_verified_at')->nullable()->default(null);
            $table->timestamp('professional_email_verified_at')->nullable()->default(null);
            $table->timestamp('archived_at')->nullable()->default(null);
            $table->timestamp('blocked_at')->nullable()->default(null);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies');
        });

        Schema::table('companies', function (Blueprint $table) {
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropForeign(['owner_id']);
            $table->dropColumn('owner_id');
        });

        Schema::dropIfExists('users');
    }
};
