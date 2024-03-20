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
        Schema::create('table_category', function (Blueprint $table) {
            $table->category_id();
            $table->string('category_name_en');
            $table->string('category_name_ar');
            $table->string('category_image');
            $table->count();
            $table->has_service();
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
        Schema::dropIfExists('table_category');
    }
};


