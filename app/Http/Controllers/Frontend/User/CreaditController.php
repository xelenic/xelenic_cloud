<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\BillingInvoice;
use Illuminate\Http\Request;

class CreaditController extends Controller
{
    public function index()
    {
        $billingInvoice = BillingInvoice::where('user_id',auth()->user()->id)
            ->get();

        return view('frontend.user.credit_total.index',[
            'billingInvoices' => $billingInvoice
        ]);
    }

    public function show_invoice($id)
    {
        $getInvoice = BillingInvoice::where('id',$id)->first();
        $userDetails = User::where('id',$getInvoice->user_id)->first();

        return view('frontend.user.credit_total.invoice',[
            'get_invoice' => $getInvoice,
            'userDetails' => $userDetails,
        ]);

    }
}
