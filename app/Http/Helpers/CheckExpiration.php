<?php


namespace App\Http\Helpers;
use Carbon\Carbon as carbon;

class CheckExpiration
{
    public static function checkExpiration($expiry_date)
    {
        // get current date time in the form 'Y-m-d H:i:s'
        $mytime = carbon::now();
        $current_date = $mytime->toDateTimeString();

        if($current_date == null || $expiry_date == null)
        {
            //$date = '0001-01-01 00:00:00';
            //return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y H:i:s');
            //return 'N/A';
            return ;
        }

        if ($coupon = $expiry_date >= $current_date) {
            // ok
            return true;
        } else {
            // error, coupon expired
            return false;
        }
    }
}
