<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\BillingInvoice;
use App\Models\CreditsPackage;
use Illuminate\Http\Request;

class CreditsPackageController extends Controller
{
    public function index()
    {
        $packages = CreditsPackage::where('package_status','published')->get();

        return view('frontend.user.packages.index',[
            'packages' => $packages
        ]);
    }

    public function purchase(Request $request)
    {
        $package_id = $request->package_id;
        $packageDetails = CreditsPackage::where('id',$package_id)->first();


        BillingInvoice::make_payment($packageDetails->price,$package_id);

        publish_notification(auth()->user()->id,'fa fa-dollar','You have purchased '. number_format($packageDetails->creadits,2) .' Xelenic Credits for USD ' .number_format($packageDetails->price,2),'gooogle.com');

        return back();

    }
}
