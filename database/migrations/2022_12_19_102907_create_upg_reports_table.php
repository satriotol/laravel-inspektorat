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
        Schema::create('upg_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('upg_category_id');
            $table->string('name')->nullable();
            $table->longText('address')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('instansi')->nullable();
            $table->string('phone')->nullable();
            $table->longText('hubungan_dengan_pemberi')->nullable();
            $table->dateTime('datetime_gratifikasi')->nullable();
            $table->longText('address_gratifikasi')->nullable();
            $table->longText('uraian_jenis_gratifikasi')->nullable();
            $table->longText('nilai_gratifikasi')->nullable();
            $table->longText('alasan_pemberian')->nullable();
            $table->longText('kronologi_pemberian')->nullable();
            $table->string('file')->nullable();
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
        Schema::dropIfExists('upg_reports');
    }
};
