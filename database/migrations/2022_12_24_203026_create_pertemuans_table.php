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
        Schema::create('pertemuans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('konsultasi_asistensi_category_id');
            $table->unsignedBigInteger('opd_id');
            $table->dateTime('waktu_pertemuan')->nullable();
            $table->longText('description_permasalahan')->nullable();
            $table->string('file')->nullable();
            $table->longText('description_file')->nullable();
            $table->longText('response')->nullable();
            $table->string('response_file')->nullable();
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('pertemuans');
    }
};
