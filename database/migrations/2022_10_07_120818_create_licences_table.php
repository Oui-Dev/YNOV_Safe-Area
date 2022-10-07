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
        Schema::create('licences', function (Blueprint $table) {
            $table->id();
            $table->uuid('reference')->unique();
            $table->string('title');
            $table->string('description');
            $table->integer('min')->default(1); //nb utilisateurs min
            $table->integer('max')->default(100); //nb utilisateurs max
            $table->integer('duration'); //nb mois
            $table->boolean('is_premium')->default(false); //Licence premium = démarcation
            $table->boolean('is_private')->default(false); //Licence privée = sur-mesure = non affichée dans la liste des licences publiques
            $table->float('price'); //prix par mois HT
            $table->timestamp('published_at')->default(now())->nullable();
            $table->timestamp('archived_at')->nullable();
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
        Schema::dropIfExists('licences');
    }
};
