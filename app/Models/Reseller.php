<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mockery\Exception;

class Reseller extends Model
{
    public static function create_list($reseller_id,$domain_name,$package_name,$user_name,$contact_email = null, $password = null)
    {
        $resellerDetails = Reseller::where('id',$reseller_id)->first();
        $domain_name_removal= preg_replace( "#^[^:/.]*[:/]+#i", "", $domain_name );
        try{
            $query = $resellerDetails->url.":".$resellerDetails->port."/json-api/createacct?api.version=1&username=".$user_name."&domain=".$domain_name_removal.'&pkgname='.$package_name.'&';
            dd($query);
            $adding_query = $query.'contactemail='.$contact_email.'&password='.$password;
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
            $header[0] = "Authorization: whm $resellerDetails->username:$resellerDetails->auth_key";
            curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
            curl_setopt($curl, CURLOPT_URL, $adding_query);
            $result = curl_exec($curl);
            $fin = json_decode($result);
            return $fin;
        }catch (\Exception $exception){
            return $exception;
        }
    }

    public static function cpanel_login($reseller_id,$cpanel_username,$cpanel_id)
    {

        $resellerDetails = Reseller::where('id',$reseller_id)->first();
        try{
            $query = $resellerDetails->url.":".$resellerDetails->port."/json-api/create_user_session?api.version=1&user=".$cpanel_username."&service=cpaneld";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
            $header[0] = "Authorization: whm $resellerDetails->username:$resellerDetails->auth_key";
            curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
            curl_setopt($curl, CURLOPT_URL, $query);
            $result = curl_exec($curl);
            $fin = json_decode($result);

            return $fin;
        }catch (\Exception $exception){
            return $exception;
        }
    }


    public static function cpanel_phpmyadmin($reseller_id,$cpanel_username,$cpanel_id)
    {

        $resellerDetails = Reseller::where('id',$reseller_id)->first();
        try{
            $query = $resellerDetails->url.":".$resellerDetails->port."/json-api/create_user_session?api.version=1&user=".$cpanel_username."&service=cpaneld&app=Database_phpMyAdmin";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
            $header[0] = "Authorization: whm $resellerDetails->username:$resellerDetails->auth_key";
            curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
            curl_setopt($curl, CURLOPT_URL, $query);
            $result = curl_exec($curl);
            $fin = json_decode($result);

            return $fin;
        }catch (\Exception $exception){
            return $exception;
        }
    }









    public static function cpanel_brandwith($reseller_id)
    {
        $resellerDetails = Reseller::where('id',$reseller_id)->first();
        try{
            $query = $resellerDetails->url.":".$resellerDetails->port."/execute/StatsBar/get_stats";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
            $header[0] = "Authorization: whm $resellerDetails->username:$resellerDetails->auth_key";
            curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
            curl_setopt($curl, CURLOPT_URL, $query);
            $result = curl_exec($curl);
            $fin = json_decode($result);
            $finout = $fin->data->pkg;

        }catch (\Exception $exception)
        {
            return $exception;
        }
    }



    public static function sync_packages($reseller_id)
    {
        $resellerDetails = Reseller::where('id',$reseller_id)->first();
        try{
            $query = $resellerDetails->url.":".$resellerDetails->port."/json-api/listpkgs?api.version=1";
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
            $header[0] = "Authorization: whm $resellerDetails->username:$resellerDetails->auth_key";
            curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
            curl_setopt($curl, CURLOPT_URL, $query);
            $result = curl_exec($curl);
            $fin = json_decode($result);
            $finout = $fin->data->pkg;
            foreach ($finout as $package_item)
            {
                $getPackageDetails = HostBucketPackages::where('name',$package_item->name)->first();
                if($getPackageDetails == null)
                {
                    $hostBucketPackege = new HostBucketPackages;
                    $hostBucketPackege->name = $package_item->name;
                    $hostBucketPackege->maxdown = $package_item->MAXADDON;
                    $hostBucketPackege->featurelist = $package_item->FEATURELIST;
                    $hostBucketPackege->maxpop = $package_item->MAXPOP;
                    $hostBucketPackege->maxpark = $package_item->MAXPARK;
                    $hostBucketPackege->digestauth = $package_item->DIGESTAUTH;
                    $hostBucketPackege->lang = $package_item->LANG;
                    $hostBucketPackege->ip = $package_item->IP;
                    $hostBucketPackege->maxlst = $package_item->MAXLST;
                    $hostBucketPackege->max_email_per_hour = $package_item->MAX_EMAIL_PER_HOUR;
                    $hostBucketPackege->quota = $package_item->QUOTA;
                    $hostBucketPackege->cgi = $package_item->CGI;
                    $hostBucketPackege->cpmod = $package_item->CPMOD;
                    $hostBucketPackege->_package_extensions = $package_item->_PACKAGE_EXTENSIONS;
                    $hostBucketPackege->maxftp = $package_item->MAXFTP;
                    $hostBucketPackege->maxsub = $package_item->MAXSUB;
                    $hostBucketPackege->bwlimit = $package_item->BWLIMIT;
                    $hostBucketPackege->maxsql = $package_item->MAXSQL;
                    $hostBucketPackege->max_defer_fail_percentage = $package_item->MAX_DEFER_FAIL_PERCENTAGE;
                    $hostBucketPackege->hasshell = $package_item->HASSHELL;
                    $hostBucketPackege->max_emailadct_quota = $package_item->MAX_EMAILACCT_QUOTA;
                    $hostBucketPackege->day_cost = 000.6;
                    $hostBucketPackege->ssl = 'free_ssl';
                    $hostBucketPackege->database = 'MySQL Maria DB';
                    $hostBucketPackege->reseller_id = $reseller_id;
                    $hostBucketPackege->name_description = $package_item->BWLIMIT.' MB Bandwidth,'.$package_item->QUOTA.' MB Storage, Free SSL, MySQL';
                    $hostBucketPackege->save();
                }else{

                }
            }
            return $finout;
        }catch (\Exception $exception){
            return $exception;
        }
    }
}
