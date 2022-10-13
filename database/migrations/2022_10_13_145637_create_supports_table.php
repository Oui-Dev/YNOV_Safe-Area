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
        Schema::create('supports', function (Blueprint $table) {
            $table->id();
            $table->uuid('reference');
            $table->enum('source',['interne', 'externe']);
            $table->enum('type',['incident', 'demande']);
            $table->unsignedBigInteger('category_id'); //['Connexion', 'Réinitialisation du mot de passe', 'Création de compte', 'Autre']
            $table->integer('emergency'); //[1,2,3,4,5] = TBasse, basse, moyenne, haute, très haute
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('lastname')->nullable();
            $table->text('firstname')->nullable();
            $table->string('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('description');
            $table->longText('file')->nullable();
            $table->enum('status',['nouveau', 'attribue', 'en cours', 'termine', 'clos'])->default('nouveau');

            $table->unsignedBigInteger('attributed_to')->nullable(); //attribué à
            $table->timestamp('attributed_at')->nullable(); //attribué le

            $table->unsignedBigInteger('observator_id')->nullable(); //Référent & validateur
            $table->timestamp('validated_at')->nullable(); //par observateur
            $table->timestamp('started_at')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamp('archived_at')->nullable();

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('observator_id')->references('id')->on('users');
            $table->foreign('attributed_to')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supports');
    }
};
