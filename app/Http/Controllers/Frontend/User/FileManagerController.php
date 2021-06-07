<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HostBucket;
use App\Http\CpanelFunctions\CpanelCore;

class FileManagerController extends Controller
{
    public function index($id,$filepath)
    {

        $hostingDetails = HostBucket::where('id',$id)->first();
        $hostusername = $hostingDetails->username;
        $rootUrl = $filepath;
        $plc= str_replace("/","%2f",$rootUrl);



        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getretnGit = $api->file_manager($plc);


        return json_encode($getretnGit->data);
    }
}
