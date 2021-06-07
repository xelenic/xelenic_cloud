<?php
use App\Http\Controllers\Frontend\User\HostBucketController;
use App\Http\Controllers\Frontend\User\HostBucketPanelController;
use App\Http\Controllers\Frontend\User\FileManagerController;
use App\Http\Controllers\Frontend\User\ScortaController;



Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {

        /**
         * HostbucketRoutes
         * Copyright (c) Xelenic PVT Ltd
         * Author - Sanjaya Senevirathne
         */

        /**
         * Hostbucket Function
         * Create Host
         */

        //Server Information
        Route::get('hostbucket/hostpanel/server_information/{id}', [HostBucketPanelController::class, 'server_information_page'])->name('hostbucket.host_panel');
        Route::post('hostbucket/hostpanel/cpanel_login/{id}', [HostBucketPanelController::class, 'login_cpanel'])->name('hostbucket.login_cpanel');

        //MySql Databases
        Route::get('hostbucket/hostpanel/mysql_databases/{id}/mysql_info', [HostBucketPanelController::class, 'databases_page'])->name('hostbucket.mysql_databases');
        Route::get('hostbucket/hostpanel/mysql_databases/{id}/database_user_management', [HostBucketPanelController::class, 'database_user_management'])->name('hostbucket.mysql_databases_users');
        Route::get('hostbucket/hostpanel/mysql_databases/{id}/mysql_info/config_database/{database_name}', [HostBucketPanelController::class, 'config_database'])->name('hostbucket.config_database');
        Route::get('hostbucket/hostpanel/mysql_databases/{id}/remote_sql', [HostBucketPanelController::class, 'remote_sql'])->name('hostbucket.remote_sql');
        Route::post('hostbucket/hostpanel/mysql_databases/{id}/create_database', [HostBucketPanelController::class, 'create_database'])->name('hostbucket.create_database');
        Route::post('hostbucket/hostpanel/mysql_databases/{id}/delete_database', [HostBucketPanelController::class, 'delete_database'])->name('hostbucket.delete_database');
        Route::post('hostbucket/hostpanel/mysql_databases/{id}/delete_user_database', [HostBucketPanelController::class, 'delete_user_database'])->name('hostbucket.delete_user_database');
        Route::post('hostbucket/hostpanel/mysql_databases/{id}/create_users_database', [HostBucketPanelController::class, 'create_users_database'])->name('hostbucket.create_users_database');
        Route::post('hostbucket/hostpanel/mysql_databases/{id}/repair_users_database', [HostBucketPanelController::class, 'repair_users_database'])->name('hostbucket.repair_users_database');
        Route::post('hostbucket/hostpanel/mysql_databases/{id}/database_user_access', [HostBucketPanelController::class, 'database_user_access'])->name('hostbucket.database_user_access');
        Route::post('hostbucket/hostpanel/mysql_databases/{id}/remote_sql/deleteaccess_host', [HostBucketPanelController::class, 'remote_sql_host_delete'])->name('hostbucket.remote_sql_host_delete');
        Route::post('hostbucket/hostpanel/mysql_databases/{id}/remote_sql/remote_sql_host_add', [HostBucketPanelController::class, 'remote_sql_host_add'])->name('hostbucket.remote_sql_host_add');
        Route::post('hostbucket/hostpanel/phpmyadmin_login/{id}', [HostBucketPanelController::class, 'phpmyadmin_login'])->name('hostbucket.phpmyadmin_login');
        Route::get('hostbucket/error/{id}/error_handle', [HostBucketPanelController::class, 'error_page'])->name('hostbucket.error_page');

        //Error Log
        Route::get('hostbucket/reports/{id}/error_log', [HostBucketPanelController::class, 'error_log'])->name('hostbucket.error_log');

        //File Manager
        Route::get('hostbucket/file_manager/{id}/file_manager', [HostBucketPanelController::class, 'file_manager'])->name('hostbucket.file_manager');
        Route::get('hostbucket/file_manager/{id}/file_path={filepath?}', [FileManagerController::class, 'index'])->name('hostbucket.index')->where('filepath', '(.*)');;
        Route::get('hostbucket/file_manager/{id}/delete={filepath?}', [FileManagerController::class, 'index'])->name('hostbucket.index')->where('filepath', '(.*)');;

        //FTP Connection
        Route::get('hostbucket/hostpanel/ftp_connections/{id}', [HostBucketPanelController::class, 'ftp_connections'])->name('hostbucket.ftp_connections');
        Route::post('hostbucket/hostpanel/ftp_connections/{id}/create_ftp_account', [HostBucketPanelController::class, 'create_ftp_account'])->name('hostbucket.create_ftp_account');
        Route::post('hostbucket/hostpanel/ftp_connections/{id}/delete', [HostBucketPanelController::class, 'delete_ftp_account'])->name('hostbucket.delete_ftp_account');


        //Git Deployment
        Route::get('hostbucket/hostpanel/git_deployment/{id}/git_panel', [HostBucketPanelController::class, 'git_panel'])->name('hostbucket.git_panel');
        Route::get('hostbucket/hostpanel/git_deployment/{id}/scorta_installer', [ScortaController::class, 'index'])->name('hostbucket.scorta_installer');
        Route::post('hostbucket/hostpanel/git_deployment/{id}/gitRepoCreate', [HostBucketPanelController::class, 'gitRepoCreate'])->name('hostbucket.gitRepoCreate');
        Route::get('hostbucket/hostpanel/git_deployment/{id}/manageGitRepo/{repo_name}', [HostBucketPanelController::class, 'gitRepoManage'])->name('hostbucket.gitRepoManage');
        Route::post('hostbucket/hostpanel/git_deployment/{id}/gitRepoCreate', [HostBucketPanelController::class, 'gitRepoCreate'])->name('hostbucket.gitRepoCreate');
        Route::post('hostbucket/hostpanel/git_deployment/{id}/gitRepoDelete', [HostBucketPanelController::class, 'gitRepoDelete'])->name('hostbucket.gitRepoDelete');
        Route::post('hostbucket/hostpanel/git_deployment/{id}/scorta_installer', [ScortaController::class, 'scorta_installer'])->name('hostbucket.scorta_installer');
    });
});
