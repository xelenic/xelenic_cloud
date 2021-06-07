<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXelenicCloudAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xelenic_cloud_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('app_name');
            $table->text('app_version');
            $table->text('description');
            $table->text('author');
            $table->text('website');
            $table->text('external_link');
            $table->text('documentation_id');
            $table->text('image');
            $table->text('repo_name');
            $table->text('repo_url');
            $table->text('installed_url');
            $table->text('database_name');
            $table->text('database_raw');
            $table->text('user_id');
            $table->text('database_username');
            $table->text('database_password');
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
        Schema::dropIfExists('xelenic_cloud_apps');
    }
}
