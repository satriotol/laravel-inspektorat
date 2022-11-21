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
        Schema::table('kebijakans', function (Blueprint $table) {
            $table->longText('entitas')->nullable();
            $table->longText('nomor')->nullable();
            $table->string('tahun')->nullable();
            $table->date('ditetapkan_tanggal')->nullable();
            $table->date('diundangkan_tanggal')->nullable();
            $table->date('berlaku_tanggal')->nullable();
            $table->longText('sumber')->nullable();
            $table->longText('file')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kebijakans', function (Blueprint $table) {
            $table->dropColumn('entitas');
            $table->dropColumn('nomor');
            $table->dropColumn('tahun');
            $table->dropColumn('ditetapkan_tanggal');
            $table->dropColumn('diundangkan_tanggal');
            $table->dropColumn('berlaku_tanggal');
            $table->dropColumn('sumber');
            $table->string('file')->change();
        });
    }
};
