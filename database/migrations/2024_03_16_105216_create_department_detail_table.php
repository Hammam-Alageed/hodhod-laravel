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
        Schema::create('department_details', function (Blueprint $table) {
            // $table->increments('dept_detail_id');
            $table->id();
            $table->foreignId('subSubService_id')->constrained();
            $table->string('dept_detail_name');
            $table->string('dept_detail_price');
            $table->string('dept_detail_offer');
            $table->string('dept_detail_hodoffer');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_detail');
    }
};

