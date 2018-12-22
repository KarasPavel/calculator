<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullName');
            $table->string('email')->default('отсутствует');
            $table->string('telephone');
            $table->integer('specialist_id')->default(1)->unsigned();
            $table->integer('day_for_call_id')->unsigned()->default('8');
            $table->integer('application_status_id')->unsigned();
            $table->time('start_time')->default('00:00');
            $table->time('end_time')->default('00:00');
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
        Schema::dropIfExists('applications');
    }
}
