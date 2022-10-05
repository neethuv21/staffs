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
        Schema::create('adddetails', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->string('name');
            $table->string('code');
            $table->string('unit');
            $table->integer('tax');
             $table->string('hsncode');
              $table->string('date');
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
        Schema::dropIfExists('adddetails');
    }
};
