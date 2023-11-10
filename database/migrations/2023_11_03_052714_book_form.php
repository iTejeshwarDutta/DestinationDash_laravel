<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_form', function (Blueprint $table) {
            $table->id();
            // $table->morphs('tokenable');
            $table->string('name');
            $table->string('email');
            $table->int('phone');
            $table->string('address');
            $table->string('location');
            $table->int('guests');
            $table->timestamp('arrivals');
            $table->timestamp('leaving');
            // $table->string('token', 64)->unique();
            // $table->text('abilities')->nullable();
            // $table->timestamp('last_used_at')->nullable();
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
        Schema::dropIfExists('book_form');

    }
}
