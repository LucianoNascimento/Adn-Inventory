<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index();
            $table->bigInteger('supplier_id')->index();
            $table->bigInteger('product_id')->index();
            $table->bigInteger('sales_invoice');
            $table->string('status');
            $table->integer('quantity');
            $table->double('purches_price',10,2);
            $table->double('sales_price',10,2);
            $table->double('profit',10,2);
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
        Schema::dropIfExists('purches');
    }
}
