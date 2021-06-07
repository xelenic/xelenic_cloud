<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('user_id');
            $table->text('price');
            $table->text('package_id');
            $table->text('package_name');
            $table->text('credits');
            $table->text('total');
            $table->text('transaction_id')->nullable();
            $table->text('description')->nullable();
            $table->text('status')->comment('1 is success, 0 is not success');
            $table->text('discount')->nullable();
            $table->text('discount_type')->nullable();
            $table->text('payment_type')->comment('coupon is coupon payment, price_payment is payment with cards');
            $table->text('coupon_code')->nullable();
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
        Schema::dropIfExists('billing_invoices');
    }
}
