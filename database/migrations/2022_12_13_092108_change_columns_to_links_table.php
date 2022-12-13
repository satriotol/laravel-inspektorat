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
        Schema::table('links', function (Blueprint $table) {
            $table->unsignedBigInteger('is_layanan_utama')->nullable()->change();
            $table->unsignedBigInteger('is_terkait')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('links', function (Blueprint $table) {
            $table->unsignedBigInteger('is_layanan_utama')->nullable(false)->change();
            $table->unsignedBigInteger('is_terkait')->nullable(false)->change();
        });
    }
};
