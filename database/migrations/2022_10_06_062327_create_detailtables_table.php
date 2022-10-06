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
        Schema::create('detailtables', function (Blueprint $table) {
            $table->id();
              $table->integer('uid');
            $table->string('iname');
            $table->string('icode');
            $table->string('sunit');
            $table->integer('stax');
             $table->string('shsncode');
              $table->string('sdate');
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
        Schema::dropIfExists('detailtables');
    }
};
