<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\HostBucket;
use App\Models\HostBucketPackages;
use App\Models\Reseller;
use App\Models\Website;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Validator;
use App\Http\CpanelFunctions\CpanelCore;

class HostBucketController extends Controller
{
    public function index()
    {
        $getHostBucket= HostBucket::where('user_id',auth()->user()->id)->get();

        return view('frontend.user.hostbucket.index',[
            'hostbucket_details' => $getHostBucket
        ]);
    }

    public function website_project_connect(Request $request)
    {

        $hostingDetails = HostBucket::where('id',$request->hostbucket_id)->first();

        $resellerDetails = Reseller::where('id',$hostingDetails->reseller_id)->first();

        $input = preg_replace( "#^[^:/.]*[:/]+#i", "", $resellerDetails->url );

        $username = 'xelenicftpacc';
        $password = 'Redhacker88jeuROEL';

        $api = new CpanelCore($input,$hostingDetails->username, $hostingDetails->password,$hostingDetails->cpanel_api_details);
        $getretnGit = $api->ftpCreate($username,$password,null);

        $hosbucket = HostBucket::where('id',$request->hostbucket_id)->update([
           'hostbucket_ftp_username' => $username.'@'.self::remove_http($hostingDetails->domain_name),
            'hostbucket_ftp_password' => $password,
        ]);

        Website::where('id',$request->website_id)->update([
           'hostbucket_id' =>  $hostingDetails->id
        ]);


       return back();
    }

    public static function remove_http($url)
    {
        $str = preg_replace('#^https?://#', '', rtrim($url,'/'));
        return $str;
    }


    public function create_hostbucket(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bucket_name' => 'required|min:8',
            'package_name' => 'required',
            'billing_type' => 'required',
            'estimated_cost_input' => 'required',
            'estimated_value' => 'required',
            'control_panel_type' => 'required',
            'xelenic_panel' => 'required',
            'username' => 'required|min:6',
            'support_email' => 'required|email',
            'domain_name' => 'required',
            'password' => 'required|string|min:6',
        ]);
        $hostbucket_packagename = HostBucketPackages::where('name',$request->package_name)->first();
        if ($validator->fails()) {
            $serverDetails = [
              'bucket_name' => $request->bucket_name,
              'package_name' => $request->package_name,
              'billing_type' => $request->billing_type,
              'estimated_cost_input' => $request->estimated_cost_input,
              'estimated_value' => $request->estimated_value,
              'control_panel_type' => $request->control_panel_type,
              'xelenic_panel' => $request->xelenic_panel,
              'username' => $request->username,
              'support_email' => $request->support_email,
              'domain_name' => 'https://'.$request->domain_name,
              'password' => $request->password,
              'conform_host_password' => $request->conform_host_password,
              'packageDetails' => $hostbucket_packagename
            ];
          return view('frontend.user.hostbucket.create_wrong',$serverDetails)->withErrors($validator);
        }

        if(auth()->user()->credits_value > json_decode($request->estimated_cost_input)->total_calculation)
        {

            $getDetails = Reseller::create_list('1','https://'.$request->domain_name,$request->package_name,$request->username,$request->support_email,$request->password);

            if($getDetails->metadata->output->raw == null){
                return redirect()->route('frontend.user.hostbucket')->with('error_message', 'Something wrong with our Host Bucket System');

            }else{
                User::where('id',auth()->user()->id)->update([
                    'credits_value' => auth()->user()->credits_value - json_decode($request->estimated_cost_input)->total_calculation
                ]);

                publish_notification(auth()->user()->id,'fa fa-dollar','You have purchased Xelenic Hostbucket for $'.json_decode($request->estimated_cost_input)->total_calculation,'');

                $hostbucket = new HostBucket;
                $hostbucket->estimated_cost_input = $request->estimated_cost_input;
                $hostbucket->package_name = $request->package_name;
                $hostbucket->xelenic_panel = $request->xelenic_panel;
                $hostbucket->conform_host_password = $request->conform_host_password;
                $hostbucket->billing_type = $request->billing_type;
                $hostbucket->control_panel_type = $request->control_panel_type;
                $hostbucket->estimated_value = $request->estimated_value;
                $hostbucket->bucket_name = $request->bucket_name;
                $hostbucket->domain_name =  'https://'.$request->domain_name;
                $hostbucket->support_email = $request->support_email;
                $hostbucket->username =  $request->username;
                $hostbucket->password = $request->password;
                $hostbucket->cpanel_raw = $getDetails->metadata->output->raw;
                $hostbucket->name_server = $getDetails->data->nameserver;
                $hostbucket->estimate_date = json_decode($request->estimated_cost_input)->estimate_date;
                $hostbucket->status = 'running';
                $hostbucket->day_cost = $hostbucket_packagename->day_cost;
                $hostbucket->total_calculation = json_decode($request->estimated_cost_input)->total_calculation;
                $hostbucket->ip = $getDetails->data->ip;
                $hostbucket->server_key = 'jhahksduyasda';
                $hostbucket->name_servers_details = json_encode($getDetails->data);
                $hostbucket->reseller_id = $hostbucket_packagename->reseller_id;
                $hostbucket->estimate_days = json_decode($request->estimated_cost_input)->days;
                $hostbucket->user_id = auth()->user()->id;
                $hostbucket->save();
                publish_notification(auth()->user()->id,'fa fa-server','Xelenic Hostbucket created successfully.Now you can access that hostbucket panel','');

                return redirect()->route('frontend.user.hostbucket');
            }


        }else{
            return 'low credit balacnece';
        }
    }


    public function create_wrong($data)
    {
        dd($data);
        return view('frontend.user.hostbucket.create_wrong');
    }

    public function create()
    {
//        $packages = self::create_list('xelenic','IVO50J51NKITHJU3S0WW8221NG7A5TAH','https://xelenic.com','2087','romaline.com');

        $packageDetails = HostBucketPackages::all();

        $server_name = 'SERVER_'.self::generateRandomString(8);

        return view('frontend.user.hostbucket.creator',[
            'package_details' => $packageDetails,
            'server_name' =>$server_name
        ]);
    }

    public static function  generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    public function getpackageDetails($name)
    {
        $getDetails = HostBucketPackages::where('name',$name)->first();

        $arrayoutput = [
            'reseller_id' => $getDetails->reseller_id,
            'name' => $getDetails->name,
            'day_cost' => $getDetails->day_cost,
            'monthly_cost' => number_format($getDetails->day_cost * 30,2),
            'yearly_cost' => number_format(($getDetails->day_cost * 30) * 12),
        ];

        return json_encode($getDetails);

    }

    public function billing_calulation($package_name,$billling_type,$value,$day)
    {
        $packageDetail = HostBucketPackages::where('name',$package_name)->first();

        if($billling_type == 'time_limit')
        {
            $date = Carbon::createFromFormat('Y.m.d', date('Y.m.d'));
            $date = $date->addDays($day);
            $outputArray = [
                'day_cost' => number_format($packageDetail->day_cost,2),
                'days' => $day,
                'total_calculation' => number_format($packageDetail->day_cost * $day,2),
                'estimate_date' => $date->format('Y-m-d'),
            ];

            return json_encode($outputArray);

        }else if( $billling_type == 'credit_limit')
        {
            $date = Carbon::createFromFormat('Y.m.d', date('Y.m.d'));
            $date = $date->addDays(round($value / $packageDetail->day_cost  ));

            $outputArray = [
                'day_cost' => $packageDetail->day_cost,
                'days' => round($value / $packageDetail->day_cost  ),
                'total_calculation' => number_format($value,2),
                'estimate_date' => $date->format('Y-m-d'),
            ];

            return json_encode($outputArray);
        }

      return $package_name.' '.$billling_type.' '.$value.'/'.$day;
    }




}
