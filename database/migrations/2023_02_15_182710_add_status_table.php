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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('color');
            $table->timestamps();
        });

        Schema::table('helpdesk_supports', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->foreignId('status_id')->constrained('statuses');
            $table->dropColumn('emergency');
            $table->boolean('is_urgent')->default(false);
        });

        Schema::table('complains', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->foreignId('status_id')->constrained('statuses');
            $table->dropColumn('urgency');
            $table->boolean('is_urgent')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('complains', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
            $table->dropColumn('status_id');
            $table->string('status')->default('new');
            $table->dropColumn('is_urgent');
            $table->integer('urgency')->default(0);
        });

        Schema::table('helpdesk_supports', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
            $table->dropColumn('status_id');
            $table->enum('status',['nouveau', 'attribue', 'en cours', 'termine', 'clos'])->default('nouveau');
            $table->dropColumn('is_urgent');
            $table->integer('emergency');
        });

        Schema::dropIfExists('statuses');
    }
};
