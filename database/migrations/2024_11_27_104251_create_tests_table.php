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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('name');
            $table->integer('age')->nullable();
            $table->string('phone');
            $table->string('mail');
            $table->date('date')->nullable();
            $table->date('s_date')->nullable();
            $table->date('e_date')->nullable();
            $table->text('body_1')->nullable();
            $table->mediumText('body_2')->nullable();
            $table->longText('body_3')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->integer('opening_amount')->nullable();
            $table->integer('balance')->nullable();
//            $table->json('faq')->nullable();
            $table->string('is_active', 3)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
