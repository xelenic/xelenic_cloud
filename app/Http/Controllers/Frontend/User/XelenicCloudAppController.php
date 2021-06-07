<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class XelenicCloudAppController extends Controller
{
    public function index()
    {

        $details =  self::app_details();

        return $details;


    }


    public static function app_details()
    {
        $app_details = [
          'app_name' => 'API Builder SEQ',
          'app_version' => '0.0.1',
          'description' => 'API Builder you can assess database apit and connect builder',
          'author' => 'Sanjaya Senevirathne',
          'website' => 'www.apibuilder.org/connection_apiq',
          'external_link' =>  'apibuile/apls',
          'documentation' => 'http://apibuilder.org/connect_sqls',
          'image' => 'no_img.jpg'
        ];

        $repo_details = [
          'repo_name' => 'API Builder SEQ',
          'repo_url' => 'https://github.com/darryldecode/laravelshoppingcart.git',
          'install_url' => 'public_html',
        ];

        $database_notes = [
          'running_method' => 'create',
          'database_name' =>  'database_test',
        ];

        $database_user = [
          'running_method' => 'create',
          'database_user' => 'userpanel',
          'database_password' => '9@!98sAS$',
        ];

        $final_out = [
            'app_details' => $app_details,
            'repo_details' => $repo_details,
            'database_notes' => $database_notes,
            'database_user' => $database_user,
        ];
        return json_encode($final_out);
    }
}
