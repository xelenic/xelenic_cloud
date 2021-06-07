<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    public static function create_website($project_name=null,$description=null)
    {
        $projectContent = 'project-'.auth()->user()->id.'-'.rand(10000,99999);
        $websiteDetails = new Website;

        if($project_name)
        {
            $websiteDetails->name = $project_name;
        }else{
            $websiteDetails->name = $projectContent;
        }

        if($description)
        {
            $websiteDetails->description = $description;
        }else{
            $websiteDetails->description = null;
        }

        $websiteDetails->user_id = auth()->user()->id;
        $websiteDetails->preview_url = '/tmp/preview/'.auth()->user()->id.'/'.$projectContent;
        $websiteDetails->save();
        return $websiteDetails->id;
    }




}
