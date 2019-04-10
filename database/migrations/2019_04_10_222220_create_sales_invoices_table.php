<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index();
            $table->string('invoice_number')->index();
            $table->bigInteger('customer_id')->index();
            $table->bigInteger('do_no')->nullable();
            $table->timestamp('date');
            $table->double('discount',10,2);
            $table->double('discount_value',10,2);
            $table->double('total',10,2);
            $table->double('less',10,2);
            $table->double('sub_total',10,2);
            $table->double('grand_total',10,2);
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
        Schema::dropIfExists('sales_invoices');
    }
}
