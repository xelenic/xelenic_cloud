<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostBucketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('host_buckets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('estimated_cost_input');
            $table->text('package_name');
            $table->text('xelenic_panel');
            $table->text('conform_host_password');
            $table->text('billing_type');
            $table->text('control_panel_type');
            $table->text('estimated_value');
            $table->text('bucket_name');
            $table->text('domain_name');
            $table->text('support_email');
            $table->text('username');
            $table->text('password');
            $table->text('cpanel_raw')->nullable();
            $table->text('name_server')->nullable();
            $table->text('estimate_date')->nullable();
            $table->text('status');
            $table->text('day_cost');
            $table->text('total_calculation');
            $table->text('ip');
            $table->text('server_key');
            $table->text('name_servers_details');
            $table->text('reseller_id');
            $table->text('estimate_days');
            $table->text('user_id');
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
        Schema::dropIfExists('host_buckets');
    }
}
