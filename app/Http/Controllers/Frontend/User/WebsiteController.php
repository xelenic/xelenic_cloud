<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;
use Auth;
use Session;
class WebsiteController extends Controller
{
    public function index()
    {
        $WebsiteDetails = Website::where('user_id',auth()->user()->id)->get();
        return view('frontend.user.web_projects.index',[
            'website_details' => $WebsiteDetails
        ]);
    }

    public function dashboard($id)
    {
        return view('frontend.user.web_projects.website_dashboard');
    }

    public function create(Request $request)
    {
        $wbeiste_id = Website::create_website($request->project_name,$request->description);
        publish_notification(auth()->user()->id,'fa fa-code','HTML Website Project Created Successful.','');
        return redirect()->route('frontend.user.website_project.builder',$wbeiste_id);
    }

    public function builder($id)
    {
        $data['demo']   =   false;
        define('SUPRA_BASE_PATH', base_path('public/backend/assets/builder'));
        define('SUPRA_BASE_URL', url('backend/assets/builder'));
        $Viewbuilder = new \App\Utilities\Builder\Html;
        $data['groups'] =   $Viewbuilder->groups;
        $data['website_id']  = $id;
        $data['project_id'] = 0;
        return view('frontend.user.web_projects.web_builder',$data);
    }

    public function builder_edit($id)
    {
        $data['demo']   =   false;
        define('SUPRA_BASE_PATH', base_path('public/backend/assets/builder'));
        define('SUPRA_BASE_URL', url('backend/assets/builder'));
        $Viewbuilder = new \App\Utilities\Builder\Html;
        $data['groups'] =   $Viewbuilder->groups;
        $websiteDetails = Website::where('id',$id)->first();
        $data['website_id'] = $id;
        $data['projectfile'] = url($websiteDetails->project_file);
        $data['project_id'] = $id;
        $data['id'] = $id;
        define('SUPRA', 1);
        return view('frontend.user.web_projects.web_builder',$data);
    }

    public function ajax(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        define('SUPRA_BASE_PATH', base_path('public/backend/assets/builder'));
        define('SUPRA_BASE_URL', asset('backend/assets/builder'));
        define('SUPRA_TMP_PATH', base_path('public'));
        define('CURRENT_USER', Auth::getUser()->id);
        define('CURRENT_COMPANY', 1);
        $ajax = new \App\Utilities\Builder\Request;
        if (preg_match('/[a-z]+/i', $_GET['mode'])) {
            $function = $_GET['mode'];
            if (method_exists($ajax, ucfirst($function))) {
                $ajax->{ucfirst($function)}();
            }
        }else{
            return response()->json(['result' => 'error', 'message' => 'test']);
        }
    }
}
