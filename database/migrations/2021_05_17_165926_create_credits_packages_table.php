<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('package_name');
            $table->text('package_description')->nullable();
            $table->integer('price')->default(0);
            $table->text('offer_price')->nullable();
            $table->text('package_status');
            $table->integer('credits')->default(0);
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
        Schema::dropIfExists('credits_packages');
    }
}
