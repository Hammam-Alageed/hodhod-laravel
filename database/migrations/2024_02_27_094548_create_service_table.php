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
        Schema::create('services', function (Blueprint $table) {
            // $table->increments('service_id');
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('service_name_en');
            $table->string('service_name_ar');
            $table->integer('service_count');
            $table->boolean('has_subservice');
            $table->string('service_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service');
    }
};
