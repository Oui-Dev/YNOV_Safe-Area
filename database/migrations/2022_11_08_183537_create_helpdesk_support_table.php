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
        Schema::create('helpdesk_supports', function (Blueprint $table) {
            $table->id();
            $table->uuid('reference');
            $table->unsignedBigInteger('user_id');
            $table->enum('type',['incident', 'demande']);
            $table->enum('status',['nouveau', 'attribue', 'en cours', 'termine', 'clos'])->default('nouveau');
            $table->integer('emergency');
            $table->text('title');
            $table->longText('description');
            $table->longText('file')->nullable();

            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamp('archived_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('helpdesk_supports');
    }
};
