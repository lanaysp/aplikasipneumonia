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
        Schema::table('edukasi', function (Blueprint $table) {
            $table->foreign(['categori_id'], 'edukasi_ibfk_1')->references(['id'])->on('m_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('edukasi', function (Blueprint $table) {
            $table->dropForeign('edukasi_ibfk_1');
        });
    }
};
