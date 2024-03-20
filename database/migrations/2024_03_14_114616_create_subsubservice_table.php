<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    
    public function up()
    {
        Schema::create('subsubservice', function (Blueprint $table) {
            $table->subSubService_id();
            $table->subService_id();
            $table->string('work_time');
            $table->string('department');
            $table->string('department_offer');
            $table->string('department_hodhod_offer');
            $table->string('department_rates');
            $table->count();
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
        Schema::dropIfExists('subsubservice');
    }
};

