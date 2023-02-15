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
        Schema::create('complain_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('complains', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('screen_url')->nullable();
            $table->string('status')->default('new');
            $table->integer('urgency')->default(0);
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->string('user_reference');
            $table->foreignId('complain_type_id')->constrained('complain_types');
            $table->foreignId('assigned_to')->nullable()->constrained('users');
            $table->boolean('is_anonymous')->default(false);
            $table->timestamp('viewed_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        Schema::create('complain_chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('complain_id')->constrained('complains')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users');
            $table->text('content');
            $table->string('screen_url')->nullable();
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
        Schema::dropIfExists('complain_chats');
        Schema::dropIfExists('complains');
        Schema::dropIfExists('complain_types');
    }
};
