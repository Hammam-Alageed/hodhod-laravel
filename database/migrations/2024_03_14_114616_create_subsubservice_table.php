<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up()
    {
        Schema::create('subsubservices', function (Blueprint $table) {
            // $table->increments('subSubService_id');
            $table->id();
            $table->foreignId('subservice_id')->constrained();
            $table->string('work_time');
            $table->string('department');
            $table->string('department_offer');
            $table->string('department_hodhod_offer');
            $table->string('department_rates');
            $table->integer('count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsubservice');
    }
};
