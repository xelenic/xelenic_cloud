<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Reseller;
use Illuminate\Http\Request;
use App\Models\HostBucket;
use App\Http\CpanelFunctions\CpanelCore;

class HostBucketPanelController extends Controller
{
    public function server_information_page($id)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $resellerDetails = Reseller::where('id',$hostingDetails->reseller_id)->first();

        $input = preg_replace( "#^[^:/.]*[:/]+#i", "", $resellerDetails->url );



        $api = new CpanelCore($input,$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $brandwith_data = $api->getBandwidth("+5:30");
        if($brandwith_data == null)
        {
            return redirect()->route('frontend.user.hostbucket.error_page',$hostingDetails->id);
        }else{
            return view('frontend.user.hostbucket.host_panel.functions.server_information.server_information',[
                'hosting_details' => $hostingDetails,
                'brandwidth_data' => $brandwith_data->data
            ]);
        }
    }

    public function remote_sql($id)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $details = $api->remoteSQL();
        if($details == null)
        {
            return redirect()->route('frontend.user.hostbucket.error_page',$hostingDetails->id);
        }else{
            return view('frontend.user.hostbucket.host_panel.functions.databases.remote_database_sql',[
                'hosting_details' => $hostingDetails,
                'host_node' => $details
            ]);
        }
    }


    public function remote_sql_host_delete($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $details = $api->remoteSQLDeleteHostAccess($request->host);
        return back();
    }


    public function remote_sql_host_add($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $details = $api->remoteSQLHostAdd($request->host);
        return back();
    }

    public function database_user_access($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $babilone = "";
        foreach ($request->all() as $key=>$req)
        {
            if($req == 'on')
            {
                $babilone .= $key.",";
            }
        }
       $output = substr_replace($babilone ,"",-1);
        $plc= str_replace("_","%20",$output);
        $brandwith_data = $api->addUserPrivilage($request->username,$request->database_name,$plc);
        if($brandwith_data->errors == null)
        {
            return back()->with('success', '"'.$request->database_name.'" database user privileges created for '.$request->username);
        }else{
            return back()->with('error', $brandwith_data->errors[0]);
        }
    }

    public function delete_user_database($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getMySQLDatabase = $api->deleteUserMySQL($request->database_user);
        if($getMySQLDatabase->errors == null)
        {
            return back()->with('success', '"'.$request->database_user.'" database user deleted successful');
        }else{
            return back()->with('error', $getMySQLDatabase->errors[0]);
        }
    }

    public function login_cpanel($id, Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $sessionData = Reseller::cpanel_login($hostingDetails->reseller_id,$hostingDetails->username,'cpanel_id');
        return redirect($sessionData->data->url);
    }

    public function phpmyadmin_login($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $sessionData = Reseller::cpanel_phpmyadmin($hostingDetails->reseller_id,$hostingDetails->username,'cpanel_id');
        return redirect($sessionData->data->url);
    }

    public function databases_page($id)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getMySQLDatabase = $api->getAllDatabasesMySQL();
        if($getMySQLDatabase == null)
        {
            return redirect()->route('frontend.user.hostbucket.error_page',$hostingDetails->id);
        }else{
            return view('frontend.user.hostbucket.host_panel.functions.databases.databases',[
                'hosting_details' => $hostingDetails,
                'get_mysql_database' => $getMySQLDatabase,
            ]);
        }
    }


    public function config_database($id,$database_name)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getSQLServerInfo = $api->getMySQLServerInfo();
        $getMySQLUsers = $api->listUserMySQL();
        if($getMySQLUsers == null)
        {
            return redirect()->route('frontend.user.hostbucket.error_page',$hostingDetails->id);
        }else{
            return view('frontend.user.hostbucket.host_panel.functions.databases.config_database',[
                'hosting_details' => $hostingDetails,
                'database_name' => $database_name,
                'sql_server_info' => $getSQLServerInfo->data,
                'get_mysql_users' => $getMySQLUsers
            ]);
        }
    }

    public function create_database($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $hostusername = $hostingDetails->username;
        $stringCut = substr($hostusername, 0, 8).'_';
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getMySQLDatabase = $api->createDataBaseMySQL($stringCut.$request->database_name);
        if($getMySQLDatabase->errors == null)
        {
            return back()->with('success', '"'.$stringCut.$request->database_name.'" database created successful');
        }else{
            return back()->with('error', $getMySQLDatabase->errors[0]);
        }
    }

    public function delete_database($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getMySQLDatabase = $api->deleteDataBaseMySQL($request->database_name);
        if($getMySQLDatabase->errors == null)
        {
            return back()->with('success', '"'.$request->database_name.'" database deleted successful');
        }else{
            return back()->with('error', $getMySQLDatabase->errors[0]);
        }
    }

    public function create_users_database($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $hostusername = $hostingDetails->username;
        $stringCut = substr($hostusername, 0, 8).'_';
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getMySQLDatabase = $api->createUserMySQL($stringCut.'_'.$request->user_name,$request->password);
        if($getMySQLDatabase->errors == null)
        {
            return back()->with('success', '"'.$request->user_name.'" database user created,password is "'.$request->password.'""');
        }else{
            return back()->with('error', $getMySQLDatabase->errors[0]);
        }
    }

    public function database_user_management($id)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getMySQLUsers = $api->listUserMySQL();
        if($getMySQLUsers == null)
        {
            return redirect()->route('frontend.user.hostbucket.error_page',$hostingDetails->id);
        }else{
            return view('frontend.user.hostbucket.host_panel.functions.databases.database_users',[
                'hosting_details' => $hostingDetails,
                'mysql_users' => $getMySQLUsers->data
            ]);
        }
    }

    public function error_log($id)
    {
        dd('sss');
    }

    public function git_panel($id)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getretnGit = $api->listGitRepo();
        if($getretnGit == null)
        {
            return redirect()->route('frontend.user.hostbucket.error_page',$hostingDetails->id);
        }else{
            return view('frontend.user.hostbucket.host_panel.functions.git_deployment.git_panel',[
                'hosting_details' => $hostingDetails,
                'getretnGit' => $getretnGit
            ]);
        }

    }

    public function gitRepoCreate($id, Request $request)
    {

        $hostingDetails = HostBucket::where('id',$id)->first();
        $rootUrl = '/home/'.$hostingDetails->username.'/'.$request->repo_path;
        $plc= str_replace("/","%2f",$rootUrl);
        if($request->clone_repo == null)
        {
            $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
            $getretnGit = $api->createGitRepo($request->repo_name,$plc,$request->clone_url);

        }else{
            $getretnGit = null;
        }
        if($getretnGit->errors == null)
        {
            return back()->with('success', '"'.$request->database_name.'" database user privileges created for '.$request->username);
        }else{
            return back()->with('error', $getretnGit->errors[0]);
        }
    }


    public function repair_users_database($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getretnGit = $api->repairDataBaseMysql($request->database_name);
        if($getretnGit->errors == null)
        {
            return back()->with('success', '"'.$request->database_name.' Repaired successful');
        }else{
            return back()->with('error', $getretnGit->errors[0]);
        }
    }



    public function gitRepoManage($id,$repo_name)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $hostusername = $hostingDetails->username;
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getretnGit = $api->listGitRepo();
        $dataout = "";
        foreach ($getretnGit->data as  $data)
        {
            if($data->name == $repo_name)
            {
                $dataout = $data;
            }else{

            }
        }
        if($getretnGit == null)
        {
            return redirect()->route('frontend.user.hostbucket.error_page',$hostingDetails->id);
        }else{
            return view('frontend.user.hostbucket.host_panel.functions.git_deployment.git_repo_manage_panel',[
                'hosting_details' => $hostingDetails,
                'repo_info' => $dataout
            ]);
        }
    }


    public function gitRepoDelete($id,Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $rootUrl = $request->repo_path;
        $plc= str_replace("/","%2f",$rootUrl);
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getretnGit = $api->deleteGitRepo($plc);
        return back();
    }

    public function ftp_connections($id)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getretnGit = $api->ftplist();

        return view('frontend.user.hostbucket.host_panel.functions.ftp_connection.index',[
            'hosting_details' => $hostingDetails,
            'ftp_details' => $getretnGit->data
        ]);
    }

    public function create_ftp_account($id, Request $request)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        $api = new CpanelCore("xelenic.com",$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getretnGit = $api->ftpCreate($request->login,$request->password,$request->quota_limit);
        if($getretnGit->errors == null)
        {
            return back()->with('success', '"'.$request->database_name.' FTP account created');
        }else{
            return back()->with('error', $getretnGit->errors[0]);
        }
    }

    public function delete_ftp_account($id,Request $request)
    {
        dd($request);
    }



    public function file_manager($id)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        if($hostingDetails == null)
        {
            return redirect()->route('frontend.user.hostbucket.error_page',$hostingDetails->id);
        }else{
            return view('frontend.user.hostbucket.host_panel.functions.file_manager.file_manager',[
                'hosting_details' => $hostingDetails,
            ]);
        }
    }

    public function error_page($id)
    {
        $hostingDetails = HostBucket::where('id',$id)->first();
        if($hostingDetails == null)
        {
            return redirect()->route('frontend.user.hostbucket.error_page',$hostingDetails->id);
        }else{
            return view('frontend.user.hostbucket.host_panel.common.error',[
                'hosting_details' => $hostingDetails
            ]);
        }
    }







}
