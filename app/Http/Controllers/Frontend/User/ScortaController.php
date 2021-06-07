<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\CpanelFunctions\CpanelCore;
use Illuminate\Http\Request;
use App\Models\HostBucket;

class ScortaController extends Controller
{
    public function index($id)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        return view('frontend.user.hostbucket.host_panel.functions.git_deployment.git_scorta',[
            'hosting_details' => $hostingDetails
        ]);
    }

    public function scorta_installer($id, Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $jsonDetails = json_decode($request->scorta_json);
        $rootUrl = '/home/'.$hostingDetails->username.'/'.$jsonDetails->repo_details->install_url;
        $plc= str_replace("/","%2f",$rootUrl);
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $stringCut = substr($hostingDetails->username, 0, 8).'_';
        $getretnGit = $api->createGitRepo($jsonDetails->repo_details->repo_name,$plc,$jsonDetails->repo_details->repo_url);
//        if($getretnGit->errors != null)
//        {
//            $message = [
//                'message' => $getretnGit->errors[0],
//                'error_status' => 'Git Deployment'
//            ];
//            return json_encode($message);
//        }
//        $database = $api->createDataBaseMySQL($stringCut.$jsonDetails->database_notes->database_name);
//        if($database->errors != null)
//        {
//            $message = [
//                'message' => $database->errors[0],
//                'error_status' => 'Create Database'
//            ];
//            return json_encode($message);
//        }
//        $createUser = $api->createUserMySQL($stringCut.''.$jsonDetails->database_user->database_user,$jsonDetails->database_user->database_password);
//        if($createUser->errors != null)
//        {
//            $message = [
//                'message' => $createUser->errors[0],
//                'error_status' => 'Create Database'
//            ];
//            return json_encode($message);
//        }
//        $setPreivlage = $api->setPrivilegesMySQL( $stringCut.''.$jsonDetails->database_user->database_user,$stringCut.$jsonDetails->database_notes->database_name);
//        if($setPreivlage->errors != null)
//        {
//            $message = [
//                'message' => $setPreivlage->errors[0],
//                'error_status' => 'Make Privilege'
//            ];
//            return json_encode($message);
//        }

        $savefile = $api->file_manager_save('Confi',$plc,'HellllsWorlds');
        dd($savefile);




        $outputDetails = [
          'installed_details' => $plc,
          'repo_url' => $jsonDetails->repo_details->repo_url,
          'database_name' => $stringCut.$jsonDetails->database_notes->database_name,
          'database_username' => $stringCut.''.$jsonDetails->database_user->database_user,
          'database_pssword' => $jsonDetails->database_user->database_password
        ];
        return json_encode($outputDetails);
    }
}
