<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostBucketPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('host_bucket_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('maxdown');
            $table->text('maxpop');
            $table->text('maxpark');
            $table->text('digestauth');
            $table->text('lang')->nullable();
            $table->text('ip');
            $table->text('maxlst');
            $table->text('max_email_per_hour');
            $table->text('quota');
            $table->text('cgi');
            $table->text('cpmod');
            $table->text('_package_extensions');
            $table->text('maxftp');
            $table->text('maxsub');
            $table->text('bwlimit');
            $table->text('maxsql');
            $table->text('max_defer_fail_percentage')->nullable();
            $table->text('hasshell');
            $table->text('max_emailadct_quota');
            $table->text('imunify360_av')->nullable();
            $table->text('day_cost');
            $table->text('ssl');
            $table->text('database');
            $table->text('featurelist');
            $table->text('name_description')->nullable();
            $table->text('reseller_id');
            $table->text('cpanel_api_details')->nullable();
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
        Schema::dropIfExists('host_bucket_packages');
    }
}
