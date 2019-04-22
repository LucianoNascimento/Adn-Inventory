<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchesInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purches_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index();
            $table->string('invoice_number')->index();
            $table->bigInteger('supplier_id')->index();
            $table->string('do_no');
            $table->string('date');
            $table->double('discount',10,2)->nullable();
            $table->double('discount_value',10,2)->nullable();
            $table->double('total',10,2)->nullable();
            $table->double('less',10,2)->nullable();
            $table->double('sub_total',10,2)->nullable();
            $table->double('grand_total',10,2)->nullable();
            $table->string('status');
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
        Schema::dropIfExists('purches_invoices');
    }
}
