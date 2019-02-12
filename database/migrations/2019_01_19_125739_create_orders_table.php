<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone', 50);
            $table->string('email');
            $table->string('address');
            $table->enum('delivery',['Самовывоз','В пределах МКАД','Не более 5 км от МКАД','Московская область']);
            $table->integer('quantity');
            $table->integer('price');
            $table->boolean('urgency');
            $table->text('order_data');
            $table->string('comment')->nullable();
            $table->integer('application_status_id')->unsigned();
            $table->date('order_date');
            $table->string('upload_file');
            $table->string('session_id');
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
        Schema::dropIfExists('orders');
    }


//ALTER TABLE orders ADD uplpad_file varchar(100) NULL;
//ALTER TABLE orders ADD session_id varchar(100) NULL;
}
