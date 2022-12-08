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
        Schema::create('skrinig', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('user_id')->index('user_id');
            $table->string('batuk')->nullable();
            $table->string('kejang')->nullable();
            $table->string('asi_ya')->nullable();
            $table->string('asi_tidak')->nullable();
            $table->string('kesadaran')->nullable();
            $table->string('demam')->nullable();
            $table->string('pilek')->nullable();
            $table->string('sesak')->nullable();
            $table->string('bab_cair')->nullable();
            $table->string('mendengkur')->nullable();
            $table->string('skor')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('skrinig');
    }
};
