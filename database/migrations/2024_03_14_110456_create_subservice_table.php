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

        Schema::create('subservice', function (Blueprint $table) {
            $table->subService_id();
            $table->service_id();
            $table->string('subService_name_en');
            $table->string('subService_name_ar');
            $table->string('subService_desc');
            $table->subService_count();
            $table->string('subService_image');
            $table->string('subService_address');
            $table->string('subService_latitude');
            $table->string('subService_longitude');
            $table->string('subService_rates');
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
        Schema::dropIfExists('subservice');
    }
};
