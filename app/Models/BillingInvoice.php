<?php

namespace App\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;

class BillingInvoice extends Model
{
    protected $table ='billing_invoices';

    public static function make_payment($price,$package_id, $payment_type = null, $transaction_id = null,$description =null,$discount = null,$discount_type = null,$copon_code = null)
    {
        $billing_invoice = new BillingInvoice;
        $billing_invoice->user_id = auth()->user()->id;
        $billing_invoice->price = $price;

        $billing_invoice->package_id = $package_id;

        $packageDetails = CreditsPackage::where('id',$package_id)->first();
        $billing_invoice->package_name = $packageDetails->package_name;
        $billing_invoice->credits = $packageDetails->credits;

        $billing_invoice->total = $price;
        if($transaction_id == null)
        {
            $billing_invoice->transaction_id = microtime().rand(2003,100000);
        }else{
            $billing_invoice->transaction_id = $transaction_id;
        }
        $billing_invoice->description = $description;
        $billing_invoice->status = 1;
        $billing_invoice->discount = $discount;
        $billing_invoice->discount_type = $discount_type;
        if($payment_type == null){
            $billing_invoice->payment_type = 'price_payment';
        }else{
            $billing_invoice->payment_type = $payment_type;
            $billing_invoice->coupon_code = $copon_code;
        }
        $billing_invoice->save();
        $currentCredit = self::get_current_credit(auth()->user()->id);
        User::where('id',auth()->user()->id)->update([
            'credits_value' => $currentCredit + $price
        ]);
        return $billing_invoice->id;
    }


    public static function get_current_credit($user_id)
    {
        $userDetails = User::where('id',$user_id)->first();
        return $userDetails->credits_value;
    }

}
