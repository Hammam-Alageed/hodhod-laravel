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

        Schema::create('subservices', function (Blueprint $table) {
            // $table->increments('subService_id');
            $table->id();
            $table->foreignId('service_id')->constrained();
            $table->string('subService_name_en');
            $table->string('subService_name_ar');
            $table->string('subService_desc');
            $table->integer('subService_count');
            $table->string('subService_image');
            $table->string('subService_address');
            $table->string('subService_latitude');
            $table->string('subService_longitude');
            $table->string('subService_rates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subservice');
    }
};
