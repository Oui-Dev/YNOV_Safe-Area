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
        Schema::dropIfExists('feedback_supports');
        Schema::dropIfExists('supports');
        Schema::dropIfExists('category_supports');

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

        Schema::create('category_supports', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->unsignedBigInteger('company_id');
            $table->timestamp('archived_at')->nullable();
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies');
        });

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

            $table->foreign('category_id')->references('id')->on('category_supports');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('observator_id')->references('id')->on('users');
            $table->foreign('attributed_to')->references('id')->on('users');
        });

        Schema::create('feedback_supports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('support_id');
            $table->unsignedBigInteger('user_id');
            $table->longText('text');
            $table->timestamp('archived_at')->nullable();
            $table->timestamps();
            $table->foreign('support_id')->references('id')->on('supports');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
};
