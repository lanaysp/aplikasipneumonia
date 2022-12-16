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
        Schema::table('data_anak', function (Blueprint $table) {
            $table->foreign(['user_id'], 'data_anak_ibfk_1')->references(['id'])->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_anak', function (Blueprint $table) {
            $table->dropForeign('data_anak_ibfk_1');
        });
    }
};
