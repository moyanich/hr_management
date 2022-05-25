<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


/**
 * Add commas to currency
 *
 * @return response()
 */
if(! function_exists('formatCurrency')) {
    function formatCurrency($str) {
        return number_format($str, 2, '.', ',');
    }
}

/*
if(! function_exists('hyphenate')) {
    function hyphenate($str) {
        return implode("-", str_split($str, 3));
    }
}
   
if(! function_exists('format_date')) {
    function format_date($date) {
        return ($date instanceof DateTime) ? Carbon::parse($date)->format('Y-m-d') : null;
    }
}
*/

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertYmdToMdy')) {
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }
}
   
/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertMdyToYmd')) {
    function convertMdyToYmd($date)
    {
        return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
    }
}


/*

if (! function_exists('env')) {
    function env($key, $default = null) {
        // ...
    }
}
*/

 /* if( !is_null($date) ) {
            return Carbon::parse($date)->format('Y-m-d');
        }
        return '';
        
        return Carbon::parse($date)->format('Y-m-d'); */