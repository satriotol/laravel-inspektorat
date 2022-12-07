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
        Schema::create('wbs_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wbs_category_id');
            $table->string('name');
            $table->string('location');
            $table->dateTime('datetime');
            $table->longText('description');
            $table->string('file');
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
        Schema::dropIfExists('wbs_reports');
    }
};
