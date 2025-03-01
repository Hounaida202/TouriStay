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
        Schema::create('annance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateur')->onDelete('cascade');
            $table->string('titre');
            $table->text('description');
            $table->string('debut');
            $table->string('fin');
            $table->string('prix');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('adresse');
            $table->string('equipement');
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
        Schema::dropIfExists('annance');
    }
};
