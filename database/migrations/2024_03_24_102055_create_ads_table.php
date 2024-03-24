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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('advertise_name_en');
            $table->string('advertise_name_ar');
            $table->string('advertise_image');
            $table->boolean('type');
            $table->boolean('main_page');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->foreignId('subservice_id')->constrained();
            $table->foreignId('subsubservice_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
};
