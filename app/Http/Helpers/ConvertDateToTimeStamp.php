<?php


namespace App\Http\Helpers;
use Carbon\Carbon;


class ConvertDateToTimeStamp
{
    public static function convertDateToTimeStamp($date)
    {
        if($date == null)
        {
            //$date = '0001-01-01 00:00:00';
            //return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y H:i:s');
            return 'N/A';
        }
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y H:i:s');
    }
}
