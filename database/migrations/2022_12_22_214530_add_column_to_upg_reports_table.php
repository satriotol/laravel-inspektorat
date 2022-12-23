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
        Schema::table('upg_reports', function (Blueprint $table) {
            $table->string('status')->default('Pending');
            $table->longText('response')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('upg_reports', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('response');
        });
    }
};
