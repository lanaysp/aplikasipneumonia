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
        Schema::table('s_pneunomia', function (Blueprint $table) {
            $table->foreign(['user_id'], 's_pneunomia_ibfk_1')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('s_pneunomia', function (Blueprint $table) {
            $table->dropForeign('s_pneunomia_ibfk_1');
        });
    }
};
