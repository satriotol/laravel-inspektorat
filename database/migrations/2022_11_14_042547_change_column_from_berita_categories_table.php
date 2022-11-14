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
        Schema::table('berita_categories', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
            $table->unsignedBigInteger('is_kegiatan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('berita_categories', function (Blueprint $table) {
            $table->string('image')->nullable(false)->change();
            $table->unsignedBigInteger('is_kegiatan')->nullable(false)->change();
        });
    }
};
