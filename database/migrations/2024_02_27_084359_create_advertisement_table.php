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
        Schema::create('advertisement', function (Blueprint $table) {
            $table->advertise_id();
            $table->string('advertise_name_en');
            $table->string('advertise_name_ar');
            $table->string('advertise_image');
            $table->type();
            $table->main_page();
            $table->category_id();
            $table->service();
            $table->subservice();
            $table->subsubservice();
            $table->time_stamp();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisement');
    }
};
