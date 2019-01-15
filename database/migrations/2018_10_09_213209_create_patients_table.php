<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');  
            $table->unsignedInteger('user_id');
            $table->string('patient_name');
            $table->string('slug');
            $table->unsignedInteger('age');
            $table->string('sex');
            $table->string('case_title');
            $table->string('case_des');
            $table->string('blood_group');
            $table->string('report_image_url');
            $table->softDeletes();
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
        Schema::dropIfExists('patients');
    }
}
