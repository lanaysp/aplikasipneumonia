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
        Schema::create('m_general', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('favicon')->nullable();
            $table->string('icon_user')->nullable();
            $table->string('icon_admin')->nullable();
            $table->string('title')->nullable();
            $table->string('footer_name')->nullable();
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
        Schema::dropIfExists('m_general');
    }
};
