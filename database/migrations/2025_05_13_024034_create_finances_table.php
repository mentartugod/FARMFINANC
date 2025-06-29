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
        Schema::create('finances', function (Blueprint $table) {
            $table->id();
            $table->string('income');
            $table->string('expense');
            $table->string('profit');
            $table->date('date');
            $table->unsignedBigInteger('id_user');
             $table-> foreign('id_user')
            ->references('id')
            ->on('user_apps')
            ->onDelete('cascade')
            ->onUpdate('cascade');
             $table->unsignedBigInteger('id_animal');
            $table-> foreign('id_animal')
            ->references('id')
            ->on('animal_productions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finances');
    }
};
